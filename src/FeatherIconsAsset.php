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
    public $sourcePath = "@npm/feather-icons/dist/";

    /**
     * @var array
     */
    public $js = [
        YII_DEBUG ? 'feather.js' : 'feather.min.js'
    ];
}
