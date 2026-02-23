if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker
            .register('/sw.js', { scope: '/' })
            .then(function (reg) {
                console.log('[SW] Registered, scope:', reg.scope);

                // Optional: notify user when a new SW version is waiting
                reg.addEventListener('updatefound', function () {
                    var newWorker = reg.installing;
                    newWorker.addEventListener('statechange', function () {
                        if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                            // A new version is available — you can show a toast here
                            console.log('[SW] New content available; refresh to update.');
                        }
                    });
                });
            })
            .catch(function (err) {
                console.error('[SW] Registration failed:', err);
            });
    });
}