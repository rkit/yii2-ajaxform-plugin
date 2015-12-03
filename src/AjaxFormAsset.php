<?php

/**
 * @link https://github.com/rkit/yii2-ajaxform-js
 * @copyright Copyright (c) 2015 Igor Romanov
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace rkit\yii2\assets\ajaxform;

use yii\web\AssetBundle;

class AjaxFormAsset extends AssetBundle
{
    public $sourcePath = '@vendor/rkit/yii2-ajaxform-js/src';
    public $js = [
        'yii.ajaxForm.js',
    ];
}
