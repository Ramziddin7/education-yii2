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
        '/https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans',
        '/css/styles-merged.css',
        '/css/style.min.css',
        '/css/custom.css',
  
    ];
    public $js = [
        '/js/scripts.min.js',
        '/js/main.min.js',
        '/js/custom.js',
        '/js/check.js',
        'https://cdn.jsdelivr.net/npm/vue@2',
        '/js/vue.js',
       

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
