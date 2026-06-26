<?php

namespace thtmorais\icons;

use yii\web\AssetBundle;

/**
 * Class KeyboardKeyIconsAsset
 * @package thtmorais\icons
 */
class KeyboardKeyIconsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = "@npm/keyboard-key-icons/src";

    /**
     * @var array
     */
    public $css = [
        YII_DEBUG ? 'css/keyboard-key-icons.css' : 'css/keyboard-key-icons.min.css'
    ];
}
