<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace common\humhub\assets;

use yii\web\AssetBundle;

/**
 * jQery Blueimp File Upload 
 * 
 * @author luke
 */
class BlueimpFileUploadAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/blueimp-file-upload';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/jquery.fileupload.js',
        'js/jquery.iframe-transport.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'common\humhub\assets\JqueryWidgetAsset',
    ];

}
