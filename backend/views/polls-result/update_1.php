<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PollsResult */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Polls Result',
]) . $model->id_poll;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls Results'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poll, 'url' => ['view', 'id_poll' => $model->id_poll, 'id_answer' => $model->id_answer]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="polls-result-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
