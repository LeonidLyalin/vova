<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PollsAnswers */


?>
<div class="polls-answers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'id_poll'=>$id_poll
    ]) ?>

</div>
