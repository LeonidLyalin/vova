<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\House */

$this->title = Yii::t('app', 'Добавить дом');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Дома'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
