<?php

namespace thtmorais\icons;

use yii\web\AssetBundle;

class FeatherIconsAsset extends AssetBundle
{
    public $sourcePath = "@npm";

    private $path = "feather-icons/dist/";

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