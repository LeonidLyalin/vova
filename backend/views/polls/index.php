<?php

/**
 * List of polls with ability to see answers for each poll on double click
 */
use yii\helpers\Html;
use yii\web\View;
//use yii\grid\GridView;
use kartik\grid\GridView;
use backend\controllers\PollsAnswersController;
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;
use backend\models\PollsSearch;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//echo $id_poll;
$this->title = Yii::t('app', 'Polls');
$this->params['breadcrumbs'][] = $this->title;
$url = "/vova/backend/web/polls-answers/indexpart";
$this->registerJS(
        '
            $(document).ready(function () {
            $("tr").on("dblclick", function (ev) {
                var text_id = $("td:first", $(this)).text();
                var text_question = $("td:nth-child(2)", $(this)).text();
                $(".questionnumber").html("<h1>"+text_id+"</h>");
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
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create poll'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
                ['attribute' => 'question', 'value' => 'question'], //:ntext',
            // 'date_beg',
            ['attribute' => 'date_beg', 'format' => ['date', 'php:d-m-Y']],
                ['attribute' => 'date_end', 'format' => ['date', 'php:d-m-Y']],
            //'allow_mulitple',
            //'is_random',
            // [atribute=>'anonymous',
            //     values=>'anonymousLabel'],
//                ['attribute' => 'allowMultipleLabel', 'label' => 'Multiple answer'],
//                ['attribute' => 'anonymousLabel', 'label' => 'Anonymous answer'],
//                ['attribute' => 'isRandomLabel', 'label' => 'Random order'],//
            ['class' => 'kartik\grid\BooleanColumn', 'value' => 'anonymous',
                'trueLabel' => 'Yes',
                'falseLabel' => 'Yes',
                'label' => Yii::t('app', 'Anonymous votes')
            ],
                ['class' => 'kartik\grid\BooleanColumn', 'value' => 'allow_mulitple',
                'trueLabel' => 'Yes',
                'falseLabel' => 'Yes',
                'label' => Yii::t('app', 'Allow multiple')
            ],
                ['class' => 'kartik\grid\BooleanColumn', 'value' => 'is_random',
                'trueLabel' => 'Yes',
                'falseLabel' => 'Yes',
                'label' => Yii::t('app', 'Random order of answers')
            ],
                ['class' => 'kartik\grid\BooleanColumn', 'value' => 'show_vote',
                'trueLabel' => 'Yes',
                'falseLabel' => 'Yes',
                'label' => Yii::t('app', 'Show votes')
            ],
//                ['attribute' => 'showVoteLabel', 'label' => 'Show votes'],
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
        <div class="row">
            <div class="col-md-1"><div class="questionnumber"></div></div>
            <div class="col-md-7"><div class="questiontext"></div></div>
        </div>
        <div class="secondtable"></div>
    </div>


    <?
//    try {
//        echo $id_poll;
//    } catch (Exception $e) {
//        echo 'Выброшено исключение: ', $e->getMessage(), "\n";
//    }

    $model1 = $dataProvider->getModels();

    if ($id_poll == 0) {
        try {
            //$model1 = $dataProvider->getModels();

            $id_poll = $model1[0]['id'];
            // $question = $model1[0]['question'];
        } catch (Exception $e) {
            echo 'Выброшено исключение: ', $e->getMessage(), "\n";
        }
    }

    foreach ($model1 as $val1) {
        // var_dump($val1);
        //  var_dump($val1['question']);

        if ($val1['id'] == $id_poll) {
            $question = $val1['question'];
            break;
        }
    }
//$val1 = $model1[1]['question'];
//var_dump($val1);
//$questionprovider = new PollsSearch;
//        $questionmodels=$questionprovider->search(['id'=>$id_poll]);
//        $question=$questionmodels->getModels();
//var_dump($questionprovider);
//var_dump($questionmodels);
//var_dump($question);
    ?>
    <script type="text/javascript">
        $(".questionnumber").html("<h2><?= $id_poll ?></h2>");
        $(".questiontext").html("<h2><?= $question ?></h2>");
        $.ajax({
            type: "GET",
            url: "<?= $url ?>",
            data: "id_poll=<?= $id_poll ?>",
            success: function (msg) {
                if (msg.length > 0) {
                    $(".secondtable").html(msg);
                }
            }}
        );//  $.ajax({
    </script>




</div>

