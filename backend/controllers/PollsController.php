<?php

namespace backend\controllers;

use Yii;
use backend\models\Polls;
use backend\models\PollsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PollsController implements the CRUD actions for Polls model.
 */
class PollsController extends Controller
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
     * Lists all Polls models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PollsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionShowanswers2()
    {
       // $searchModel = new PollsSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('showanswers2');
    }


    /**
     * Displays a single Polls model.
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
     * Creates a new Polls model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Polls();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Polls model.
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
     * Deletes an existing Polls model.
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
     * Create new pool according humhub example
     * @param type $id
     * @return type
     * @throws HttpException
     */
    public function actionCreatehumhub($id)
    {if (!$this->contentContainer->permissionManager->can(new \humhub\modules\polls\permissions\CreatePoll())) {
            throw new HttpException(400, 'Access denied!');
        }
        
        $poll = new Poll();
        $poll->scenario = Poll::SCENARIO_CREATE;
        $poll->question = Yii::$app->request->post('question');
        $poll->setNewAnswers(Yii::$app->request->post('newAnswers'));
        $poll->allow_multiple = Yii::$app->request->post('allowMultiple', 0);
        $poll->anonymous = Yii::$app->request->post('anonymous', 0);
        $poll->is_random = Yii::$app->request->post('is_random', 0);
        return \humhub\modules\polls\widgets\WallCreateForm::create($poll, $this->contentContainer);
    
    }
    
    /**
     * Finds the Polls model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Polls the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Polls::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
}
