<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace common\humhub\components;

use Yii;

/**
 * @inheritdoc
 */
class Application extends \yii\web\Application
{

    /**
     * @inheritdoc
     * могут быть проблемы с контроллерамимогут быть проблемы с контроллерами
     */
    public $controllerNamespace = 'common\humhub\\controllers';//могут быть проблемы с контроллерами

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {

        /**
         * Check if it's already installed - if not force controller module
         */
        if (!$this->params['installed'] && $this->controller->module != null && $this->controller->module->id != 'installer') {
            $this->controller->redirect(['/installer/index']);
            return false;
        }

        /**
         * More random widget autoId prefix
         * Ensures to be unique also on ajax partials
         */
        \yii\base\Widget::$autoIdPrefix = 'h' . mt_rand(1, 999999) . 'w';

        return parent::beforeAction($action);
    }

    /**
     * @inheritdoc
     */
    public function preInit(&$config)
    {
        if (!isset($config['timeZone']) && date_default_timezone_get()) {
            $config['timeZone'] = date_default_timezone_get();
        }

        parent::preInit($config);
    }

}
