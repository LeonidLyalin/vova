<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\ionicons;


use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class Icon
 * @package modernkernel\ionicons
 */
class Icon extends Widget
{
    public $icon = ''; // see http://ionicons.com/


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->register();


    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::tag('i', '', [
            'class' => 'icon ion-' . $this->icon,
        ]);

    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        IoniconsAsset::register($view);
    }
}