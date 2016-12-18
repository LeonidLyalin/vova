<?php

use frontend\models\PollsSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use frontend\models\PollsAnswers;


/* @var $this View */
/* @var $searchModel PollsSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = Yii::t('app', 'Polls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Poll'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>   
    <!--//    GridView::widget([
    //        'dataProvider' => $dataProvider,
    //        'filterModel' => $searchModel,
    //        'summary' => '',
    //        'columns' => [
    //                ['class' => 'yii\grid\SerialColumn'],
    //            'id',
    //            'question:ntext',
    //            'date_beg',
    //            'date_end',
    //            'allow_mulitple',
    //            // 'is_random',
    //            // 'anonymous',
    //            // 'show_vote',
    //            ['class' => 'yii\grid\ActionColumn'],
    //        ],
    //    ]);-->

    <?php $form = ActiveForm::begin() ?> 
    <?
    foreach ($dataProvider as $poll) {

        echo "<h1>" . $poll->question . "</h1>";
        echo "<h1>" . $poll->id . "</h1>";

        $answersProvider = PollsAnswers::find()
                ->where('id_poll=:id', ['id' => $poll->id])
                ->all();
        if($poll->allow_multiple){
            
          
        }
    }
    ?>




    <div class="form-group">
<? // Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])  ?>
    </div>  

    <?php ActiveForm::end(); ?>

<?php Pjax::end(); ?></div>
