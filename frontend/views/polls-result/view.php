<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PollsResult */

$this->title = $model->id_poll;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls Results'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-result-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_poll], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_poll], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'num',
            'id_poll',
            'id_answer',
            'id_user',
        ],
    ]) ?>

</div>
