<?php
 
//for rending only part of anwwers corresponding to one poll
 
use yii\helpers\Html;
use yii\grid\GridView;
 
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsAnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 //$id_poll=$this->params['id_poll'];
        
?>
<div class="polls-answers-index">
    <h1><?= Html::encode(Yii::t('app', 'Answers')) ?></h1>
    <p>
        <?= Html::a(Yii::t('app', 'Create answer'), ['create?id_poll='.$id_poll], ['class' => 'btn btn-success']) ?>
        <?= $id_poll ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'answer:ntext',
                ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>