<?php

namespace thtmorais\icons;

use yii\web\AssetBundle;


/**
 * Class FeatherIconsAsset
 * @package thtmorais\icons
 */
class FeatherIconsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/';

    /**
     * @var array
     */
    public $js = [
        YII_DEBUG ? 'npm-asset/feather-icons/dist/feather.js' : 'npm-asset/feather-icons/dist/feather.min.js',
        YII_DEBUG ? 'thtmorais/yii2-icons/src/js/feather-icons.js' : 'thtmorais/yii2-icons/src/js/feather-icons.min.js',
    ];
}
