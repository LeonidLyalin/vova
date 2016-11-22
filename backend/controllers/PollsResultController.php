<?php

namespace backend\Controllers;

use Yii;
use backend\models\PollsResult;
use backend\models\PollsResultSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PollsResultController implements the CRUD actions for PollsResult model.
 */
class PollsResultController extends Controller
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
     * Lists all PollsResult models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PollsResultSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PollsResult model.
     * @param integer $id_poll
     * @param integer $id_answer
     * @return mixed
     */
    public function actionView($id_poll, $id_answer)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_poll, $id_answer),
        ]);
    }

    /**
     * Creates a new PollsResult model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PollsResult();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_poll' => $model->id_poll, 'id_answer' => $model->id_answer]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PollsResult model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_poll
     * @param integer $id_answer
     * @return mixed
     */
    public function actionUpdate($id_poll, $id_answer)
    {
        $model = $this->findModel($id_poll, $id_answer);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_poll' => $model->id_poll, 'id_answer' => $model->id_answer]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PollsResult model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_poll
     * @param integer $id_answer
     * @return mixed
     */
    public function actionDelete($id_poll, $id_answer)
    {
        $this->findModel($id_poll, $id_answer)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PollsResult model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_poll
     * @param integer $id_answer
     * @return PollsResult the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_poll, $id_answer)
    {
        if (($model = PollsResult::findOne(['id_poll' => $id_poll, 'id_answer' => $id_answer])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
