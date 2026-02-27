/**
 * Service Worker — Yii2 PWA
 *
 * Strategy:
 *  - App Shell / AppAsset files  → Cache-First (versioned cache)
 *  - Images (jpg, jpeg, png)     → Cache-First with fallback
 *  - Google Fonts / CDN assets   → Stale-While-Revalidate
 *  - Everything else             → Network-First
 */

const CACHE_VERSION = 'v1.89'; // bump this to invalidate all caches on deploy
const SHELL_CACHE = `app-shell-${CACHE_VERSION}`;
const IMAGE_CACHE = `app-images-${CACHE_VERSION}`;
const FONT_CACHE = `app-fonts-${CACHE_VERSION}`;

// ── AppAsset static files to pre-cache on install ──────────────────────────
// Mirror the files registered in AppAsset.php + core Yii JS files.
const APP_SHELL_URLS = [
  '/',                            // main entry point
  '/css/app.css',
  'css/tailwind.css',
  '/assets/7c84f9c8/yii.js',                   // yii\web\YiiAsset
];

// ── CDN / external origins handled with Stale-While-Revalidate ─────────────
const SWR_ORIGINS = [
  'fonts.googleapis.com',
  'fonts.gstatic.com',
];

// ── Helpers ────────────────────────────────────────────────────────────────

function isImage(request) {
  let url;
  try {
    url = new URL(request.url, self.location.origin);
  } catch {
    return false;
  }

  if (/\.(jpe?g|png|svg|webp|gif)(\?.*)?$/i.test(url.pathname)) return true;

  if (['lh3.googleusercontent.com', 'lh4.googleusercontent.com',
    'lh5.googleusercontent.com', 'lh6.googleusercontent.com',
    'googleusercontent.com'].some(h => url.hostname.endsWith(h))) return true;

  const accept = request.headers.get('Accept') || '';
  if (accept.includes('image/')) return true;

  return false;
}

function isSWROrigin(url) {
  try {
    const { hostname } = new URL(url);
    return SWR_ORIGINS.some(o => hostname.includes(o));
  } catch {
    return false;
  }
}

// ── Install — pre-cache the app shell ──────────────────────────────────────

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(SHELL_CACHE).then(cache =>
      Promise.allSettled(
        APP_SHELL_URLS.map(url =>
          cache.add(url).catch(err =>
            console.warn(`[SW] Failed to pre-cache ${url}:`, err)
          )
        )
      )
    ).then(() => self.skipWaiting())
  );
});

// ── Activate — delete stale caches ─────────────────────────────────────────

self.addEventListener('activate', event => {
  const currentCaches = [SHELL_CACHE, IMAGE_CACHE, FONT_CACHE];
  event.waitUntil(
    caches.keys().then(keys =>
      Promise.all(
        keys
          .filter(k => !currentCaches.includes(k))
          .map(k => caches.delete(k))
      )
    ).then(() => self.clients.claim())
  );
});

// ── Fetch ──────────────────────────────────────────────────────────────────

self.addEventListener('fetch', event => {
  const { request } = event;
  const url = new URL(request.url);

  // Ignore non http(s) requests — e.g. chrome-extension://, data:, blob:
  if (!url.protocol.startsWith('http')) return;

  // Only handle GET requests
  if (request.method !== 'GET') return;

  // ── Images: Cache-First ───────────────────────────────────────────────
  if (isImage(request)) {           // <-- pass request, not url
    event.respondWith(cacheFirst(request, IMAGE_CACHE));
    return;
  }

  // ── Fonts / CDN: Stale-While-Revalidate ──────────────────────────────
  if (isSWROrigin(url)) {
    event.respondWith(staleWhileRevalidate(request, FONT_CACHE));
    return;
  }

  // ── App Shell assets: Cache-First ────────────────────────────────────
  if (isShellAsset(url)) {
    event.respondWith(cacheFirst(request, SHELL_CACHE));
    return;
  }

  // ── Everything else: Network-First ───────────────────────────────────
  event.respondWith(networkFirst(request, SHELL_CACHE));
});

// ── Strategy implementations ───────────────────────────────────────────────

function isShellAsset(url) {
  try {
    const path = new URL(url).pathname;
    return APP_SHELL_URLS.some(u => path.endsWith(u) || path === u);
  } catch {
    return false;
  }
}

async function cacheFirst(request, cacheName) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(request);
  if (cached) return cached;

  try {
    const response = await fetch(request);
    if (response.ok) {
      cache.put(request, response.clone()); // async, intentional
    }
    return response;
  } catch {
    // Return a transparent 1x1 PNG for failed image requests
    if (isImage(request.url)) return offlineImageResponse();
    return new Response('Offline', { status: 503 });
  }
}

async function staleWhileRevalidate(request, cacheName) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(request);

  const fetchPromise = fetch(request).then(response => {
    if (response.ok) cache.put(request, response.clone());
    return response;
  }).catch(() => null);

  return cached || fetchPromise;
}

async function networkFirst(request, cacheName) {
  const cache = await caches.open(cacheName);
  try {
    const response = await fetch(request);
    if (response.ok) cache.put(request, response.clone());
    return response;
  } catch {
    const cached = await cache.match(request);
    if (cached) return cached;
    // For navigation requests, serve the cached root
    if (request.mode === 'navigate') {
      const root = await cache.match('/');
      if (root) return root;
    }
    return new Response('Offline', { status: 503, headers: { 'Content-Type': 'text/plain' } });
  }
}

function offlineImageResponse() {
  // 1×1 transparent PNG
  const body = Uint8Array.from(atob(
    'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg=='
  ), c => c.charCodeAt(0));
  return new Response(body, {
    status: 200,
    headers: { 'Content-Type': 'image/png' }
  });
}