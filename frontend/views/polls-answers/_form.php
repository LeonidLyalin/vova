<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PollsAnswers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polls-answers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_poll')->textInput() ?>

    <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
