<?php

namespace thtmorais\icons;

use yii\web\AssetBundle;

/**
 * Class FlagIconsAsset
 * @package thtmorais\icons
 */
class FlagIconsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = "@npm/flag-icons/";

    /**
     * @var string[]
     */
    public $css = [
        YII_DEBUG ? 'css/flag-icons.css' : 'css/flag-icons.min.css'
    ];
}
