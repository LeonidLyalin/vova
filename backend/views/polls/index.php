<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use backend\controllers\PollsAnswersController;
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;

//use yii\widgets\

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Опросы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polls-index">
    <div class="mess"></div>
    <div class="mess1">data-key</div>
    <div class="mess2"></div>
    <div class="mess4">обращение к элементу</div>
    <div class="mess5"></div>
    <div class="mess6">первый элемент</div>
    <div class="mess7"></div>
    <div class="mess8">второй элемент</div>
    <div class="mess9"></div>
    <script type="text/javascript">
$(document).ready(function () {

$(".kv-grid-table tr").on('click',function(ev){

var text1=$(this).text();
$(".mess").text(text1);
var text2= $(this).attr("data-key");
$(".mess2").text(text2);

var text3= $(".kv-grid-table tr td:first-child").text();
$(".kv-grid-table tr td:first-child").css( "text-decoration", "underline" );
$(".mess5").text(text3);

var text4 = $('td:first', $(this)).text();
//$(".kv-grid-table tr td:nth-child(1").css( "text-decoration", "underline" );
$(".mess7").text(text4);

var text5 = $('td:nth-child(2)', $(this)).text();
//$(".kv-grid-table tr td:nth-child(1").css( "text-decoration", "underline" );
$(".mess9").text(text5);


});

});

</script>
    
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать опрос'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'showFooter'=>true,
        //	'showHeader' => FALSE,
        // 'rowOptions' => function ($model, $index, $widget, $grid) {
        'columns' => [
            //   ['class' => 'yii\grid\SerialColumn'],
            'id',
            'question:ntext',
            'date_beg',
            'date_end',
                ['class' => 'yii\grid\ActionColumn'],
        ],
        'responsive' => true,
        'hover' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
//        'panel' => [
//            'type' => GridView::TYPE_PRIMARY,
//            'heading' => true,
//        ],
        'persistResize' => false,
        'exportConfig' => true,
    ]);
    ShowAnswers(3);
    ?>

    <?php

    function ShowAnswers($id_poll) {
        $searchAnswersModel = new PollsAnswersSearch();
        // $FFF=Yii::$app->request->queryParams;
        // $FFF=['PollsAnswerSearch'=>['id_poll'=>$num]];
        //$myModels = $search->search([$search->formName()=>['att3'=>3]]);
        //    $dataAnswersProvider = $searchAnswersModel->search($FFF);
        $dataAnswersProvider = $searchAnswersModel->search([$searchAnswersModel->formName() => ['id_poll' => $id_poll]]);
        
        
        echo \Yii::$app->view->renderFile('@app/views/polls-answers/index_part.php', ['searchModel' => $searchAnswersModel,
            'dataProvider' => $dataAnswersProvider]);
    }
    ?>
</div>
