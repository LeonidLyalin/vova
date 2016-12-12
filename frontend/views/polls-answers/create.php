<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PollsAnswers */

$this->title = Yii::t('app', 'Create Polls Answers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls Answers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-answers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
