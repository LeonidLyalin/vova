<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(Yii::t('app','Name')) ?>

            <?= $form->field($model, 'email')->label(Yii::t('app','Email')) ?>

            <?= $form->field($model, 'subject')->label(Yii::t('app','Subject')) ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6])->label(Yii::t('app','Body')) ?>

            <?=
            $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ])->label(Yii::t('app','Verification Code')) ?>
            

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>


    </div>


</div>

