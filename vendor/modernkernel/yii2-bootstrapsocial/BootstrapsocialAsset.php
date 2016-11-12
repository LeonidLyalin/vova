<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

/**
 * @link http://lipis.github.io/bootstrap-social/
 */
namespace modernkernel\bootstrapsocial;


use yii\web\AssetBundle;

/**
 * Class BootstrapsocialAsset
 * @package modernkernel\bootstrapsocial
 */
class BootstrapsocialAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-social';
    public $css = [
        'bootstrap-social.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

} 
