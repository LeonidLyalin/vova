<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace common\humhub\assets;

use yii\web\AssetBundle;

/**
 * jquery-knob
 * 
 * @author luke
 */
class Select2BootstrapAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/select2-bootstrap-theme';
    
    /**
     * @inheritdoc
     */
    public $css = ['dist/select2-bootstrap.css'];
    
    /**
     *
     * @var type 
     */
    public $depends = [
        'common\humhub\assets\Select2Asset'
    ];

}
