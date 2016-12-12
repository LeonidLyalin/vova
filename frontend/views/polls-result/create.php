<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PollsResult */

$this->title = Yii::t('app', 'Create Polls Result');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls Results'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-result-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'pollsProvider'=>$pollsProvider
    ]) ?>

</div>
