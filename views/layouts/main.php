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
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- All CSS & JS (Tailwind, Google Fonts, app styles) are
         registered via AppAsset and rendered by Yii automatically. -->

</head>

<body class="bg-background-light dark:bg-background-dark text-[#111318] dark:text-white antialiased">
    <?php $this->beginBody() ?>

    <header
        class="sticky top-0 z-50 w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-solid border-[#f0f2f4] dark:border-slate-800">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 py-4 flex items-center justify-between">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <!-- <div class="size-8 text-primary">
                    <span class="material-symbols-outlined text-3xl">church</span>
                </div> -->
                <div class="my-3 row justify-content-around text-center">
                    <img src="<?= \yii\helpers\Url::to('/images/logo.jpg') ?>" width="50" alt="Church Logo"
                        title="Jubilee Community Outreach Church" />
                </div>
                <h2 class="text-[#111318] dark:text-white text-xl font-extrabold tracking-tight">Jubilee Community
                    Outreach Church</h2>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <?= \yii\helpers\Html::a('Home', ['site/index'], [
                    'class' => 'text-primary text-sm font-bold',
                ]) ?>

                <?= \yii\helpers\Html::a('Programs', ['site/programs'], [
                    'class' => 'text-[#111318] dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors',
                ]) ?>

                <?= \yii\helpers\Html::a('Ministries', ['site/ministries'], [
                    'class' => 'text-[#111318] dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors',
                ]) ?>

                <?= \yii\helpers\Html::a('Our Mission', ['site/mission'], [
                    'class' => 'text-[#111318] dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors',
                ]) ?>
            </nav>

            <!-- CTA Button -->
            <?= \yii\helpers\Html::a('Plan Your Visit', ['site/plan-visit'], [
                'class' => 'flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-10 px-5 bg-crimson-cta text-white text-sm font-bold tracking-wide shadow-lg shadow-crimson-cta/20 hover:scale-105 transition-transform',
            ]) ?>
        </div>
    </header>


    <!-- ===================== MAIN CONTENT ===================== -->
    <main class="w-full">
        <?= $content ?>
    </main>

    <!-- ===================== FOOTER ===================== -->

    <footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 pt-16 pb-8">
        <div class="max-w-[1280px] mx-auto px-10 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">

            <!-- About Column -->
            <div class="col-span-1 md:col-span-1 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="size-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">church</span>
                    </div>
                    <h3 class="font-extrabold text-lg">Jubilee Community Outreach Church</h3>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                    A community driven by love, dedicated to outreach and spiritual growth in the heart of our city.
                </p>
            </div>

            <!-- Quick Links Column -->
            <div>
                <h4 class="font-bold text-sm mb-6 uppercase tracking-widest text-primary">Quick Links</h4>
                <ul class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
                    <li><?= \yii\helpers\Html::a('Our History', ['site/history'], ['class' => 'hover:text-primary']) ?>
                    </li>
                    <li><?= \yii\helpers\Html::a('Youth Ministry', ['youth/index'], ['class' => 'hover:text-primary']) ?>
                    </li>
                    <li><?= \yii\helpers\Html::a('Give Online', ['site/give'], ['class' => 'hover:text-primary']) ?>
                    </li>
                    <li><?= \yii\helpers\Html::a('Events Calendar', ['events/index'], ['class' => 'hover:text-primary']) ?>
                    </li>
                </ul>
            </div>

            <!-- Location Column -->
            <div>
                <h4 class="font-bold text-sm mb-6 uppercase tracking-widest text-primary">Location</h4>
                <div class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
                    <p class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-sky-accent text-sm">location_on</span>
                        Kiambu County,<br />Thika, Makongeni, Phase 8
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-sky-accent text-sm">call</span>
                        (+254) 724 636 864
                    </p>
                </div>
            </div>

            <!-- Social Column -->
            <div>
                <h4 class="font-bold text-sm mb-6 uppercase tracking-widest text-primary">Stay Connected</h4>
                <div class="flex gap-4">
                    <?= \yii\helpers\Html::a(
                        '<span class="material-symbols-outlined text-xl">rss_feed</span>',
                        ['site/rss'],
                        ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-primary hover:text-white transition-all', 'encode' => false]
                    ) ?>

                    <?= \yii\helpers\Html::a(
                        '<span class="material-symbols-outlined text-xl">share</span>',
                        ['site/social'],
                        ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-primary hover:text-white transition-all', 'encode' => false]
                    ) ?>

                    <?= \yii\helpers\Html::a(
                        '<span class="material-symbols-outlined text-xl">mail</span>',
                        ['site/contact'],
                        ['class' => 'size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-primary hover:text-white transition-all', 'encode' => false]
                    ) ?>
                </div>
            </div>

        </div>

        <!-- Copyright Bar -->
        <div class="max-w-[1280px] mx-auto px-10 pt-8 border-t border-slate-100 dark:border-slate-900 text-center">
            <p class="text-slate-400 text-xs">© <?= date('Y') ?> Jubilee Community Outreach Church. All rights reserved.
            </p>
        </div>
    </footer>
    <?php $this->endBody() ?>




</body>

</html>
<?php $this->endPage() ?>