<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/main.css',
        'public/css/bootstrap.css',
    ];
    public $js = [
        'public/js/main.js',
        'https://maps.googleapis.com/maps/api/js',
        'public/js/google.maps.api.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
        'public/js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
