<?php
namespace hoaaah\universal;

use yii\web\AssetBundle;

/**
 * Universal Business AssetBundle
 */
class UniversalAsset extends AssetBundle
{
    public $sourcePath='@vendor/hoaaah/yii2-universal-theme-asset/assets';
    public $baseUrl = '@web';

    public $css=[
        'css/animate.css',
        'css/style.default.css'
        'css/custom.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/font-awesome.min.css',
        'css/bootstrap.min.css'
    ];

    public $js=[
        'js/jquery-1.11.0.min.js',
        'js/bootstrap.min.js',
        'js/jquery.cookie.js',
        'js/waypoints.min.js',
        'js/front.js',
        'js/owl.carousel.min.js',
    ];

    public $depends = [
    ];

    public function init() {
        parent::init();
    }
}
