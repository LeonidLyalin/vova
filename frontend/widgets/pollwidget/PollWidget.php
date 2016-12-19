<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets\pollwidget;

use frontend\widgets\pollwidget\models\Polls;
use frontend\widgets\pollwidget\models\PollsResult;
use frontend\widgets\pollwidget\models\PollsResultSearch;
use Yii;
use yii\base\Widget;

class PollWidget extends Widget {

    public $model;
    private $pollsProvider;

    public function init() {
        parent::init();
    }

    /**
     * Creates a new PollsResult model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    private function createResult($model) {
        $modelsaved = false;
        $answers = $model->id_answer;
        foreach ($answers as $id_answer) {
            $modelMulti = new PollsResult();
            $modelMulti->id_user = $model->id_user; 
            $modelMulti->id_poll = $model->id_poll; 
            $modelMulti->num = $model->num;
            $modelMulti->create_at = $model->create_at;
            $modelMulti->ip = $model->ip;
            $modelMulti->host = $model->host;
            $modelMulti->id_answer = $id_answer;

            if (!$modelMulti->save()) {
                $modelsaved = false;
                print_r($modelMulti->errors);
                return false;
            } else {
                // $model->id = $model->getPrimaryKey() + 1;
                $modelsaved = true;
                //break;
            }
        }
        return $modelsaved;
    }

    /**
     * set $model properties
     * @param type $model
     * @return type $model - PollsResult
     */
    private function setModel($model) {
        $model->id_poll = $this->pollsProvider->id;
        $model->num = 1;
        $model->create_at = date("Y-m-d H:i:s");
        $model->ip = Yii::$app->request->getUserIP();
        $model->host = Yii::$app->request->getUserHost();
        if ($this->pollsProvider->anonymous) {
            $model->scenario = PollsResult::SCENARIO_ANONYMOUS;
            $model->id_user = 0;
        } else {
            if (!Yii::$app->user->isGuest) {
                $model->id_user = Yii::$app->user->getId();
            }
        }
        return $model;
    }



    public function run() {
        // Register AssetBundle
        PollWidgetAsset::register($this->getView());

        $model = new PollsResult();
        /**
         * Let's prepare  more providers
         */
        $this->pollsProvider = Polls::getPollsToday();
        $modelsaved = false;
        if ($model->load(Yii::$app->request->post())) {
            /**
             * fill attributes of model
             */
            $model = $this->setModel($model);
            /**
             * @todo I need do something with guest user. now i have user with ID=0;
             */
            if (is_array($model->id_answer)) {
                $modelsaved = $this->createResult($model);
            } else {
                $modelsaved = $model->save();
            }
        }
        if ($modelsaved) {
            $searchModel = new PollsResultSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return \Yii::$app->controller->renderPartial('@frontend/widgets/pollwidget/views/chart', 
                    ['dataProvider' => $dataProvider,
                        'searchModel' => $searchModel,
                        'question' => $this->pollsProvider->question]); //, 'id' => $model->getPrimaryKey()]);
        } else {

            return \Yii::$app->controller->renderPartial('@frontend/widgets/pollwidget/views/create', [
                        'model' => $model,
                        'pollsProvider' => $this->pollsProvider,
            ]);
        }
    }

}

