<?php

use frontend\models\PollsAnswers;
use frontend\models\PollsResult;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper

/* @var $this View */
/* @var $model PollsResult */
/* @var $form ActiveForm */
?>

<div class="polls-result-form">


    <?php $form = ActiveForm::begin(['id' => 'pollForm']); ?>

    <?
        echo "<h1>" . $pollsProvider->question ."</h1>";    
        
        $answersProvider = PollsAnswers::find()
                ->where('id_poll=:id', ['id' => $pollsProvider->id])
                ->all();
        $answer = ArrayHelper::map($answersProvider, 'id', 'answer');      
        
        if ($pollsProvider->allow_mulitple) {
            echo $form->field($model, 'id_answer')
                    ->checkBoxList($answer,['separator'=>'</br>']                        
                        )
                    ->label(false);
        } else {         
           echo $form->field($model, 'id_answer')
                    ->radioList($answer, ['separator'=>'</br>',
                    ])
                   ->label(false);
        }
    
    ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

   

</div>
