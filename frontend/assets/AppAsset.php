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
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light',
        'vendors/bootstrap/css/bootstrap.min.css',
        'vendors/font-awesome/css/fontawesome-all.min.css',
        'vendors/animate/animate.min.css',
        'vendors/simple-line-icons/css/simple-line-icons.min.css',
        'vendors/owl.carousel/assets/owl.carousel.min.css',
        'vendors/owl.carousel/assets/owl.theme.default.min.css',
        'vendors/magnific-popup/magnific-popup.min.css',
        'css/theme.css',
        'css/theme-elements.css',
        'css/theme-blog.css',
        'css/theme-shop.css',
        'vendors/rs-plugin/css/settings.css',
        'vendors/rs-plugin/css/layers.css',
        'vendors/rs-plugin/css/navigation.css',
        'css/skins/skin-corporate-4.css',
        'css/custom.css',        
    ];
    public $js = [

        // 'vendors/jquery/jquery.min.js',
        'vendors/jquery.appear/jquery.appear.min.js',
        'vendors/jquery.easing/jquery.easing.min.js',
        'vendors/jquery-cookie/jquery-cookie.min.js',
        'vendors/popper/umd/popper.min.js',
        'vendors/bootstrap/js/bootstrap.min.js',
        'vendors/common/common.min.js',
        'vendors/jquery.validation/jquery.validation.min.js',
        'vendors/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js',
        'vendors/jquery.gmap/jquery.gmap.min.js',
        'vendors/jquery.lazyload/jquery.lazyload.min.js',
        'vendors/isotope/jquery.isotope.min.js',
        'vendors/owl.carousel/owl.carousel.min.js',
        'vendors/magnific-popup/jquery.magnific-popup.min.js',
        'vendors/vide/vide.min.js',
        'js/theme.js',
        'vendors/rs-plugin/js/jquery.themepunch.tools.min.js',
        'vendors/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'js/custom.js',
        'js/theme.init.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
