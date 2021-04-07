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
    public $sourcePath = "@npm";

    /**
     * @var string
     */
    private $path = "feather-icons/dist/";

    /**
     * @param \yii\web\View $view
     */
    public function registerAssetFiles($view)
    {
        if(YII_DEBUG){
            $this->js = [$this->path.'feather.js'];
        }else{
            $this->js = [$this->path.'feather.min.js'];
        }

        parent::registerAssetFiles($view);
    }
}
