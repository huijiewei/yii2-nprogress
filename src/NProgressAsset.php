<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/8/16
 * Time: 21:36
 */

namespace huijiewei\nprogress;

use yii\web\AssetBundle;

class NProgressAsset extends AssetBundle
{
    public $sourcePath = '@bower/nprogress';

    public $publishOptions = [
        'only' => [
            '/nprogress.css',
            '/nprogress.js',
        ],
    ];

    public $css = [
        'nprogress.css',
    ];

    public $js = [
        'nprogress.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
