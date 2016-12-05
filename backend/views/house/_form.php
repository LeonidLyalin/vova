<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\House */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    
    //$form->field($model, 'id')->textInput() autoincrement and primary key in base
    ?>

    <?= $form->field($model, 'street')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'letter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
