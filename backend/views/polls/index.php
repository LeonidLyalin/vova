<?php

/**
 * List of polls with ability to see answers for each poll on double click
 */
//use yii\grid\GridView;


use backend\models\PollsSearch;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $searchModel PollsSearch */
/* @var $dataProvider ActiveDataProvider */
//echo $id_poll;
$this->title = Yii::t('app', 'Polls');
$this->params['breadcrumbs'][] = $this->title;
$url = Url::to("@web/polls-answers/indexpart");
$this->registerJS(
        '
            $(document).ready(function () {
            $(".kv-grid-table tr").on("dblclick", function (ev) {
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
        /**
         * Choose special color for actual pool (which today is valid)
         */
        'rowOptions' => function ($model) {
            $time1 = date('Y-m-d', strtotime($model->date_beg));
            $time2 = date('Y-m-d', strtotime($model->date_end));
            $time3 = date('Y-m-d');
            if ($time2 >= $time3 && $time1 <= $time3) {
                return ['class' => 'info'];
            }
        },
        'filterModel' => $searchModel,
        'columns' => [
            'id',
                ['attribute' => 'question', 'value' => 'question'], //:ntext',
            ['attribute' => 'date_beg', 'format' => ['date', 'php:d-m-Y']],
                ['attribute' => 'date_end', 'format' => ['date', 'php:d-m-Y']],
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
                ['class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            ],
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


    <script type="text/javascript">
        $(document).ready(function () {
            $("#pollanswerbutton").click(function (ev) {

                $(".createanswer").text("<p> Im working, almost </p>");
                $.ajax({
                    type: "GET",
                    url: "createpart",
                    data: "id_poll=" +<?= $id_poll ?>,
                    success: function (msg) {
                        if (msg.length > 0) {
                            $(".createanswer").html(msg);

                        }
                    }}
                );//  $.ajax({

            })//$(".kv-grid-table tr").on("click", function (ev) 
        });
    </script>

</div>

