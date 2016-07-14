<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/custom-admin.css',
        'css/custom.css',
        'css/font-awesome/css/font-awesome.min.css',
        '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css',
    ];
    public $js = [
        // 'https://maps.googleapis.com/maps/api/js',
    '//code.jquery.com/ui/1.11.4/jquery-ui.js',
    'js/sortleads.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
