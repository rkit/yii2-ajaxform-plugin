<?php

/**
 * @link https://github.com/rkit/yii2-ajaxform-plugin
 * @copyright Copyright (c) 2015 Igor Romanov
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace rkit\yii2\plugins\ajaxform;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/rkit/yii2-ajaxform-plugin/src';
    public $js = [
        'yii.ajaxForm.js',
    ];
}
