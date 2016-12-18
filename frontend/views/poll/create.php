<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Polls */

$this->title = Yii::t('app', 'Create Polls');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
