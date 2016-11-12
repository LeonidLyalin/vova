<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\ionicons;


use yii\web\AssetBundle;

/**
 * Class FontawesomeAsset
 * @package modernkernel\ionicons
 */
class IoniconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/ionicons';
    public $css = [
        'css/ionicons.min.css',
    ];
} 
