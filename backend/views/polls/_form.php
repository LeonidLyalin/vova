<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use \yii\redactor\widgets\Redactor;

/* @var $this yii\web\View */
/* @var $model backend\models\Polls */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polls-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id')->textInput()  ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'question')->widget(Redactor::className()) ?>

    <?php
    //$form->field($model, 'date_beg')->textInput()    
    ?>
    <?php
    //$form->field($model, 'date_end')->textInput()    
    ?>
    <div class="row">
        <div class="col-md-4">
            <?=
            $form->field($model, 'date_beg')->widget(\yii\jui\DatePicker::classname(), [
                //'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
            ])
            ?>
        </div>
        <div class="col-md-4">
            <?=
            $form->field($model, 'date_end')->widget(\yii\jui\DatePicker::classname(), [
                //'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
            ])
            ?>
        </div>
    </div>

    <div class="checkbox">
        <?=
                $form->field($model, 'allow_mulitple')
                ->checkbox([
                    'label' => Yii::t('app', 'Allow multiple answers'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
        ]);
        ?>
    </div>
    <div class="checkbox">
        <?=
                $form->field($model, 'is_random')
                ->checkbox([
                    'label' => Yii::t('app', 'Display answers in random order'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
        ]);
        ?>
    </div>
    <div class="checkbox">
        <?=
                $form->field($model, 'anonymous')
                ->checkbox([
                    'label' => Yii::t('app', 'Anonymous votes'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
        ]);
        ?>
    </div>
    <div class="checkbox">
        <?=
                $form->field($model, 'show_vote')
                ->checkbox([
                    'label' => Yii::t('app', 'Show votes'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
        ]);
        ?>
    </div>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
