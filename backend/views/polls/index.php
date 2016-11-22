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
$this->registerJS(
        '$(document).ready(function () {

            $(".kv-grid-table tr").on("click", function (ev) {


                var text4 = $("td:first", $(this)).text();
                $(".mess7").text(text4);
                var text5 = $("td:nth-child(2)", $(this)).text();
                $(".mess9").text(text5);
                $(".tablename").text(text5);
               
  $.ajax({
                type: "GET",
                url: "showanswers2",
                data: "id_poll="+text4,
                success: function (msg) {
                    //alert(msg);
                    $(".tablename").html(msg);
                }}
            );

            }
            )
        });'
        , View::POS_READY
);
//$url1 ='showanswers2';// yii\helpers\Url::toRoute('polls/showanswers2');
//$s='$(document).ready(function () {
//            
//         var url1="'.$url1 .'"; 
//         //alert(url1);
//            $.ajax({
//                type: "GET",
//                url: url1,
//                data: "id_poll=2",
//                success: function (msg) {
//                    //alert(msg);
//                    $(".tablename").html(msg);
//                }}
//            );
//        });';
//$this->registerJS(
//        $s
//        , View::POS_READY
//        )

?>
<div class="polls-index">

    <div class="mess5"></div>
    <div class="mess6">первый элемент</div>
    <div class="mess7"></div>
    <div class="mess8">второй элемент</div>
    <div class="mess9"></div>

    <script>
//        $(document).ready(function () {
//            
//         var url1=//"@app/views/polls/example.php"
//         alert(url1);
//            $.ajax({
//                type: 'GET',
//                url: url1, //showanswers_1.php',
//                data: 'id_poll=2',
//                success: function (msg) {
//                    alert(msg);
//                    $(".tablename").text(msg);
//                }}
//            );
//        });
    </script>

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
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
        'exportConfig' => true,
    ]);
    ?>
    <div class="secondtable">
        <div class="tablename">
            second table
        </div>
        <?php //Html::encode(ShowAnswers(1)); ?>
        <?php
//  Html::encode(\Yii::$app->view->renderFile('@app/views/polls/showanswers_1.php', ['id_poll' => 1]));
//$renderFile = \Yii::$app->view->renderFile('@app/views/polls/showanswers_1.php', ['id_poll' => 1]);
//echo $renderFile;
//        
        ?>
    </div>

<!--    <script>
        $(document).ready(function () {
            var s = $.get('<?php
            //"@app/views/polls/showanswers_1.php" ?>',
                    {id_poll: 1})
                    .done(function (data) {
                        $(".tablename").text(data);

                    });

            $(".tablename").html(s);
        });

    </script>-->




</div>

