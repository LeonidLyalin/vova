<?php
// your_app/votewidget/VoteWidgetAsset.php

namespace frontend\widgets\pollwidget;

use yii\web\AssetBundle;

class PollWidgetAsset extends AssetBundle
{
    public $js = [
       
    ];

    public $css = [
        
       
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}
