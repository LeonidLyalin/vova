<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Polls */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polls-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_beg')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'allow_mulitple')->textInput() ?>

    <?= $form->field($model, 'is_random')->textInput() ?>

    <?= $form->field($model, 'anonymous')->textInput() ?>

    <?= $form->field($model, 'show_vote')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
