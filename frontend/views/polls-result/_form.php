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
   // foreach ($pollsProvider as $poll) {

        echo "<h1>" . $pollsProvider->question . "</h1>";

       // echo $form->field($model,'id_poll')->textInput(['value'=>$poll->id]);
       // echo $form->field($model,'num')->textInput(['value'=>1]);
       // $model->num = 1; //now alway one vote
      // echo $form->field($model,'id_user')->textInput(['value'=>Yii::$app->user->getId()]);
        //$model->id_user = Yii::$app->user->getId();
        $answersProvider = PollsAnswers::find()
                ->where('id_poll=:id', ['id' => $pollsProvider->id])
                ->all();
        $answer = ArrayHelper::map($answersProvider, 'id', 'answer');
        if ($pollsProvider->allow_mulitple) {

        //    $model->scenario = PollsResult::SCENARIO_MULTIPLE;
            echo $form->field($model, 'id_answer')
                    ->checkBoxList($answer,['separator'=>'</br>']                        
                        )
                    ->label(false);
        } else {
          //  $model->scenario = PollsResult::SCENARIO_SINGLE;
           
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
