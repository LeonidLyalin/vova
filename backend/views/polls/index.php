<?php

use yii\helpers\Html;
use yii\web\View;
//use yii\grid\GridView;
use kartik\grid\GridView;
use backend\controllers\PollsAnswersController;
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;

require_once 'showanswers.php';
//use yii\widgets\

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Опросы');
$this->params['breadcrumbs'][] = $this->title;
$url = "/vova/backend/web/polls-answers/indexpart";
$this->registerJS(
        '
            $(document).ready(function () {
            $("tr").on("dblclick", function (ev) {
                var text_id = $("td:first", $(this)).text();
                var text_question = $("td:nth-child(2)", $(this)).text();
                $(".questiontext").html("<h1>"+text_question+"</h>");              
                $.ajax({
                    type: "GET",
                    url:"' . $url . '",
                    data: "id_poll="+text_id,
                    success: function (msg) {         
                    if ((msg.length>0)&&(text_question.length>0)){
                        $(".secondtable").html(msg);
                        text_question="";}
                    }}
                );//  $.ajax({
 
            })//$(".kv-grid-table tr").on("click", function (ev) {
        });' //$(document).ready(function () {
        , View::POS_END
);
?>


<div class="polls-index">




    <h1><?php Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать опрос'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
        'exportConfig' => true,
    ]);
    ?>
    <div class="dvd">
        <div class="questiontext"></div>
        <div class="secondtable"></div>
    </div>

</div>




</div>

