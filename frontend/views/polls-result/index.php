<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PollsResultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Polls Results');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-result-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Polls Result'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
<? $columns = [['class' => 'yii\grid\SerialColumn'],

            'num',
            'id_poll',
            'id_answer',
            'id_user',

            ['class' => 'yii\grid\ActionColumn'],] ?>    
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
            
        
    ]); ?>
<?php Pjax::end(); ?></div>
