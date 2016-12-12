<?php

namespace frontend\controllers;

use frontend\models\Polls;
use frontend\models\PollsResult;
use frontend\models\PollsResultSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * PollsResultController implements the CRUD actions for PollsResult model.
 */
class PollsResultController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PollsResult models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PollsResultSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PollsResult model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PollsResult model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new PollsResult();

        /**
         * Let's prepare  more providers
         */
        $pollsProvider = Polls::find()
                ->where('date_beg<=:dateToday', ['dateToday' => date('Y-m-d')])
                ->andWhere('date_end>=:dateToday', ['dateToday' => date('Y-m-d')])
                ->one();
        $modelsaved = false;
        if ($model->load(Yii::$app->request->post())) {
            /**
             * fill attributes of model
             *
             */
            $model->id_user = Yii::$app->user->getId();
            $model->id_poll = $pollsProvider->id;
            $model->num = 1;

            if (is_array($model->id_answer)) {
                $answers = $model->id_answer;
                foreach ($answers as $id_answer) {
                    $modelMulti = new PollsResult();
                    $modelMulti->id_user = Yii::$app->user->getId();
                    $modelMulti->id_poll = $pollsProvider->id;
                    $modelMulti->num = 1;
                    $modelMulti->id_answer = $id_answer;

                    if (!$modelMulti->save()) {
                        $modelsaved = false;
                        break;
                    } else {
                       // $model->id = $model->getPrimaryKey() + 1;
                        $modelsaved = true;
                        //break;
                    }
                }
            } else
                $modelsaved = $model->save();
        }

        if ($modelsaved) {
            return $this->redirect(['view', 'id' => $model->getPrimaryKey()]);
        } else {

            return $this->render('create', [
                        'model' => $model,
                        'pollsProvider' => $pollsProvider,
            ]);
        }
    }

    /**
     * Updates an existing PollsResult model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_poll]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PollsResult model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PollsResult model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PollsResult the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = PollsResult::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
