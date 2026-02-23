<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * Load order enforced by array position:
 *   CSS: Google Fonts → app.css
 *   JS:  tailwind.config.js → Tailwind CDN
 *
 * tailwind.config.js MUST come before the Tailwind CDN script
 * because the play CDN reads `tailwind.config` from the global
 * scope the moment it executes.  Yii renders $js entries in the
 * order they are declared, so position alone handles this.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        // Google Fonts — Material Symbols + Manrope
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap',

        // App-level styles (body font declaration, etc.)
        'css/app.css',
    ];

    public $js = [

        // 2. Tailwind CSS CDN (play version) with required plugins.
        '//cdn.tailwindcss.com?plugins=forms,container-queries',
        // 1. Custom Tailwind config — must execute first so the
        //    CDN script can read `tailwind.config` when it loads.
        'js/tailwind.config.js',
        'js/app.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}