<?php
/**
 * @var yii\web\View $this
 * @var string $content
 */

$this->title = 'Jubilee Community Outreach Church';
use app\assets\AppAsset;
AppAsset::register($this);


$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.png')]);
?>
<?php $this->beginPage() ?>
<?php
use \yii\helpers\Html;
// Helper: returns nav link classes based on current route
$navClass = function(string $controller, string $action = 'index') use (&$navClass): string {
    $isActive = Yii::$app->controller->id === $controller
             && Yii::$app->controller->action->id === $action;
    return $isActive
        ? 'text-primary text-sm font-bold'
        : 'text-[#111318] dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors';
};
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <!-- PWA – paste inside <head> in views/layouts/main.php -->
       <link rel="manifest" href="<?= Yii::$app->request->baseUrl ?>/manifest.json">
       <meta name="theme-color" content="#ffffff">
       <meta name="mobile-web-app-capable" content="yes">
       <meta name="apple-mobile-web-app-capable" content="yes">
       <meta name="apple-mobile-web-app-status-bar-style" content="default">
       <meta name="apple-mobile-web-app-title" content="<?= Yii::$app->name ?>">
    <link rel="apple-touch-icon" href="<?= Yii::$app->request->baseUrl ?>/images/icons/apple-touch-icon.png">
    <?php $this->head() ?>

    <style>
        /* Mobile nav drawer */
        #mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                        opacity 0.3s ease;
            opacity: 0;
        }
        #mobile-menu.open {
            max-height: 400px;
            opacity: 1;
        }

        /* Hamburger icon animation */
        #hamburger-btn .bar {
            display: block;
            width: 22px;
            height: 2px;
            background: currentColor;
            border-radius: 2px;
            transition: transform 0.3s ease, opacity 0.2s ease;
            transform-origin: center;
        }
        #hamburger-btn.open .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        #hamburger-btn.open .bar:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }
        #hamburger-btn.open .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111318] dark:text-white antialiased">
    <?php $this->beginBody() ?>

    <header
        class="sticky top-0 z-50 w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-solid border-[#f0f2f4] dark:border-slate-800">

        <!-- Top bar -->
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 py-4 flex items-center justify-between">

            <!-- Logo -->
            <?= Html::a(
    '<div class="my-1">
        <img src="' . \yii\helpers\Url::to('/images/logo.jpg') . '" width="44" height="44"
             alt="Church Logo" title="Jubilee Community Outreach Church"
             class="rounded-full object-cover" />
    </div>
    <h2 class="text-[#111318] dark:text-white text-base sm:text-xl font-extrabold tracking-tight leading-tight">
        Jubilee Community<br class="sm:hidden" /> Outreach Church
    </h2>',
    ['/site/index'],
    ['class' => 'flex items-center gap-3 hover:opacity-80 transition-opacity', 'encode' => false]
) ?>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <?= \yii\helpers\Html::a('Home', ['site/index'], [
                    'class' => $navClass('site', 'index'),
                ]) ?>
                <?= \yii\helpers\Html::a('Programs', ['site/programs'], [
                    'class' => $navClass('site', 'programs'),
                ]) ?>
                <?= \yii\helpers\Html::a('Ministries', ['site/ministries'], [
                    'class' => $navClass('site', 'ministries'),
                ]) ?>
                <?= \yii\helpers\Html::a('Our Mission', ['site/mission'], [
                    'class' => $navClass('site', 'mission'),
                ]) ?>
            </nav>

            <!-- Right side: CTA + Hamburger -->
            <div class="flex items-center gap-3">
                <?= \yii\helpers\Html::a('Plan Your Visit', ['site/plan-visit'], [
                    'class' => 'hidden sm:flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-10 px-5 bg-crimson-cta text-white text-sm font-bold tracking-wide shadow-lg shadow-crimson-cta/20 hover:scale-105 transition-transform',
                ]) ?>

                <!-- Hamburger button (mobile only) -->
                <button
                    id="hamburger-btn"
                    class="md:hidden flex flex-col gap-[6px] p-2 rounded-md text-[#111318] dark:text-white hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div id="mobile-menu" role="navigation" aria-label="Mobile navigation">
            <nav class="flex flex-col px-6 pb-5 pt-2 gap-1 border-t border-slate-100 dark:border-slate-800">
                <!-- Mobile Menu Drawer -->
            <?= Html::a('Home',       ['site/index'],    ['class' => $navClass('site', 'index')   . ' py-3 px-4 rounded-lg']) ?>
            <?= Html::a('Programs',   ['site/programs'], ['class' => $navClass('site', 'programs'). ' py-3 px-4 rounded-lg']) ?>
            <?= Html::a('Ministries', ['site/ministries'],['class' => $navClass('site', 'ministries').' py-3 px-4 rounded-lg']) ?>
            <?= Html::a('Our Mission',['site/mission'],  ['class' => $navClass('site', 'mission') . ' py-3 px-4 rounded-lg']) ?>

                <!-- CTA visible on very small screens -->
                <div class="pt-3 sm:hidden">
                    <?= \yii\helpers\Html::a('Plan Your Visit', ['site/plan-visit'], [
                        'class' => 'flex w-full cursor-pointer items-center justify-center rounded-lg h-11 px-5 bg-crimson-cta text-white text-sm font-bold tracking-wide shadow-lg shadow-crimson-cta/20',
                    ]) ?>
                </div>
            </nav>
        </div>
    </header>


    <!-- ===================== MAIN CONTENT ===================== -->
    <main class="w-full">
        <?= $content ?>
    </main>

    <!-- ===================== FOOTER ===================== -->

    <footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 pt-12 pb-6">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10">

            <!-- Grid: stacks to 1 col on mobile, 2 on sm, 4 on md+ -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 mb-12">

                <!-- About Column -->
                <div class="sm:col-span-2 md:col-span-1 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-3xl text-primary">church</span>
                        <h3 class="font-extrabold text-base leading-snug">Jubilee Community Outreach Church</h3>
                    </div>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        A community driven by love, dedicated to outreach and spiritual growth in the heart of our city.
                    </p>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h4 class="font-bold text-sm mb-5 uppercase tracking-widest text-primary">Quick Links</h4>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li><?= \yii\helpers\Html::a('Our Statement of Faith', ['site/sof'], ['class' => 'hover:text-primary transition-colors','title' => 'Jubilee Community Outreach Church Statement of Faith','target' => '_blank']) ?></li>
                        <li><?= \yii\helpers\Html::a('Youth Ministry', ['site/mission'], ['class' => 'hover:text-primary transition-colors']) ?></li>
                        <li><?= \yii\helpers\Html::a('Give Online', ['#'], ['class' => 'hover:text-primary transition-colors']) ?></li>
                        <li><?= \yii\helpers\Html::a('Events Calendar', ['site/programs'], ['class' => 'hover:text-primary transition-colors']) ?></li>
                    </ul>
                </div>

                <!-- Location Column -->
                <div>
                    <h4 class="font-bold text-sm mb-5 uppercase tracking-widest text-primary">Location</h4>
                    <div class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <p class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-sky-accent text-base mt-0.5 shrink-0">location_on</span>
                            <span>Kiambu County,<br />Thika, Makongeni, Phase 8</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sky-accent text-base shrink-0">call</span>
                            <a href="tel:+254724636864" class="hover:text-primary transition-colors">(+254) 724 636 864</a>
                        </p>
                        <p class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-sky-accent text-base mt-0.5 shrink-0">mail</span>
                            <a href="mailto:jubileecommunitychurch20@gmail.com"
                               class="hover:text-primary transition-colors break-all" title="Click to Message Us Via E-mail to (jubileecommunitychurch20@gmail.com)">E-Mail Us</a>
                        </p>
                    </div>
                </div>

                <!-- Social Column -->
                <div>
                    <h4 class="font-bold text-sm mb-5 uppercase tracking-widest text-primary">Stay Connected</h4>
                    <div class="flex gap-3 flex-wrap">
                        <?= \yii\helpers\Html::a(
                            '<span class="material-symbols-outlined text-xl">rss_feed</span>',
                            ['site/rss'],
                            ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all', 'encode' => false, 'title' => 'RSS Feed']
                        ) ?>
                        <?= \yii\helpers\Html::a(
                            '<span class="material-symbols-outlined text-xl">share</span>',
                            ['site/social'],
                            ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all', 'encode' => false, 'title' => 'Social Media']
                        ) ?>
                        <?= \yii\helpers\Html::a(
                            '<span class="material-symbols-outlined text-xl">mail</span>',
                            ['site/contact'],
                            ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all', 'encode' => false, 'title' => 'Contact Us']
                        ) ?>
                    </div>
                </div>

            </div>

            <!-- Copyright Bar -->
            <div class="pt-6 border-t border-slate-100 dark:border-slate-900 text-center">
                <p class="text-slate-400 text-xs">
                    © <?= date('Y') ?> Jubilee Community Outreach Church. All rights reserved.
                </p>
                 <p class="text-slate-300 dark:text-slate-600 text-xs mt-1">
        Crafted with <span class="text-crimson-cta">♥</span> by
        <?= Html::a('Gumzo Systems', 'https://www.linkedin.com/company/107594962/admin/dashboard/', [
            'class'  => 'hover:text-primary transition-colors font-semibold',
            'target' => '_blank',
            'rel'    => 'noopener noreferrer',
            'title'  => 'Connect with me on LinkedIn',
        ]) ?>
    </p>
            </div>

        </div>
    </footer>

    <?php $this->endBody() ?>

    <script>
        (function () {
            const btn = document.getElementById('hamburger-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', function () {
                const isOpen = menu.classList.toggle('open');
                btn.classList.toggle('open', isOpen);
                btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            // Close menu when a nav link is clicked
            menu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    menu.classList.remove('open');
                    btn.classList.remove('open');
                    btn.setAttribute('aria-expanded', 'false');
                });
            });

            // Close menu on outside click
            document.addEventListener('click', function (e) {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.remove('open');
                    btn.classList.remove('open');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
        })();
    </script>
</body>

</html>
<?php $this->endPage() ?>