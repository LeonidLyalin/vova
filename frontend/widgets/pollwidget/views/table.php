<?php

//use frontend\widgets\pollwidget\models\Polls;
//use frontend\widgets\pollwidget\models\PollsAnswers;
//use frontend\widgets\pollwidget\models\PollsResult;
//use frontend\widgets\pollwidget\models\PollsResultSearch;


use yii\bootstrap\Progress;
use yii\grid\GridView;
use yii\helpers\Html;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="polls-result-show">
    <h2><?= Html::encode($question) ?></h2>
    <h3><?= Html::encode(Yii::t('frontend', "Poll results")) ?></h3>

    <?
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'idAnswer.answer',
                'value' => 'idAnswer.answer',
                'label' => Yii::t('frontend', 'Answer')],
                ['attribute' => 'res',
                'value' => 'res',
                'label' => Yii::t('frontend', 'Results')],
        ],
    ]);
    ?>

</div>

