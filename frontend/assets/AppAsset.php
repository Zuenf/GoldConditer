<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'js/slick/slick.css',
        'css/main.css',
    ];
    public $js = [
        'js/slick/slick.min.js',
        'js/svg-images.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];

    public function init() {
        
    }
}
