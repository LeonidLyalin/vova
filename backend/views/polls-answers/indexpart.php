<?php

/**
 * for rending only part of answers corresponding to one poll
 * 
 * @var id_poll  - id of poll, which is selected in polls table
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PollsAnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="polls-answers-index">
    <h1><?= Html::encode(Yii::t('app', 'Answers')) ?></h1>
    <p>     
        <a id="pollanswerbutton" class="btn btn-success"><?= Yii::t('app', 'Create answer') ?></a>     
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{summary}{items}{pager}',
      //  'summary' => Yii::t('app','Showing <strong>{begin}-{end}</strong> of <strong>{totalCount}</strong>.'),
    
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id',
            'answer:ntext',
                ['class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
//                    'update' => function ($url, $model, $key) {
//      
//                        return Html::tag('h4','Update',['id'=>'pollupdatebutton','class'=>'updatebutton','title'=>$model->id]);
//        Html::a('<span class="glyphicon glyphicon-pencil">_______</span>', [],
//                                ['updatepart', 'id' => $model->id, 'id_poll' => $model->id_poll], 
//                               ['id'=>'pollupdatebutton','title' => Yii::t('app', 'Update')]);
//                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
                                ['delete', 'id' => $model->id, 'id_poll' => $model->id_poll], 
                                ['title' => Yii::t('app', 'Delete'),'data-method'=>'post']);
                    },
                ],
            ],

        ],
    ]);
    ?>
    
    <div class="row">
        <?= Html::tag('div','',['class'=>'createanswer']);?>
        <?= Html::tag('div','',['class'=>'createanswer1']);?>
    </div>

    <? /** set url for Ajax for function Click for button
     * @var $url - path to rendered view, which will pass to createanswer class (div)
     * 
     */
    $urlcreate = "/vova/backend/web/polls-answers/createpart"; 
    $urlupdate = "/vova/backend/web/polls-answers/updatepart";?>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#pollanswerbutton").click(function (ev) {   
               
                
                $.ajax({
                    type: "GET",
                    url: "<?= $urlcreate ?>",
                    data: "id_poll=" +<?= $id_poll ?>,
                    
                    success: function (msg) {
                        if (msg.length > 0) {
                            $(".createanswer").html(msg);

                        }
                    }}
                );//  $.ajax({
            });//$("#pollanswerbutton").click(function (ev) { 
            
            $(".secondtable tr").on("dblclick", function (ev) {
            
                var text_id = $("td:nth-child(2)", $(this)).text();
             
             $(".createanswer").text(text_id);
                $.ajax({
                    type: "GET",
                    url: "<?= $urlupdate ?>",
                   
                    data: "id="+text_id+"&id_poll="+<?=$id_poll?>,//jQuery.parseJSON(postData),//
                    success: function (msg) {
                        if (msg.length > 0) {
                            $(".createanswer").html(msg);

                        }
                    }}
                );//  $.ajax({
            });//$("#pollanswerbutton").click(function (ev) { 
        });
        
    </script>
</div>