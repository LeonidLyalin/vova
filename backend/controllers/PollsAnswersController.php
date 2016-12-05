<?php

namespace backend\controllers;

use Yii;
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PollsAnswersController implements the CRUD actions for PollsAnswers model.
 */
class PollsAnswersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all PollsAnswers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PollsAnswersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PollsAnswers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PollsAnswers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id_poll)
    {
        $model = new PollsAnswers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $lastInsertID = $model->getPrimaryKey();
           // $redirectPath='/polls/index?id_poll='+$id_poll
            return $this->redirect(['/polls/index', 'id_poll' => $id_poll]);//$lastInsertID]);//$model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,'id_poll' => $id_poll
            ]);
        }
    }

    /**
     * Updates an existing PollsAnswers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PollsAnswers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PollsAnswers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PollsAnswers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PollsAnswers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionIndexpart($id_poll) {
        $searchModel = new PollsAnswersSearch();
        $dataProvider = $searchModel->search([$searchModel->formName() => ['id_poll' => $id_poll]]);      
        return $this->renderPartial('indexpart', ['searchModel' => $searchModel,
                    'dataProvider' => $dataProvider, 'id_poll' => $id_poll], false
        );
    }
}
