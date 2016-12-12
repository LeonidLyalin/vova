<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PollsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polls-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'date_beg') ?>

    <?= $form->field($model, 'date_end') ?>

    <?= $form->field($model, 'allow_mulitple') ?>

    <?php // echo $form->field($model, 'is_random') ?>

    <?php // echo $form->field($model, 'anonymous') ?>

    <?php // echo $form->field($model, 'show_vote') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
