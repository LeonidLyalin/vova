<?php
 
//for rending only part of anwwers corresponding to one poll
 
use yii\helpers\Html;
use yii\grid\GridView;
 
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsAnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 
?>
<div class="polls-answers-index">
    <h1><?= Html::encode(Yii::t('app', 'Варианты ответов')) ?></h1>
    <p>
        <?= Html::a(Yii::t('app', 'Добавить ответ'), ['create'], ['class' => 'btn btn-success']) ?>
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