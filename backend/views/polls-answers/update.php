<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PollsAnswers */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Polls Answers',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls Answers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="polls-answers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
