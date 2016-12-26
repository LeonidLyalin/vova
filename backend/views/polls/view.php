<?php

use backend\models\Polls;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Polls */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Polls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$url = Url::to("@web/polls-answers/indexpart");
$this->registerJS(
        '
                      
                $.ajax({
                    type: "GET",
                    url:"' . $url . '",
                    data: "id_poll="' . $model->id . ',
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


<div class="polls-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class="row">
        <div class="col-md-6">
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'question:ntext',
                    'date_beg',
                    'date_end',
                //['attribute' => 'date_end', 'format' => ['date', 'dd-mm-YY']],
                ],
            ])
            ?>
        </div>
        <div class="col-md-6">
            <div class="checkbox">
                <?=
                Html::activeCheckbox($model, 'is_random', [
                    'label' => Yii::t('app', 'Display answers in random order'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
                    'disabled' => true,
                ]);
                ?>
            </div>
            <div class="checkbox">
                <?=
                Html::activeCheckbox($model, 'allow_mulitple', [
                    'label' => Yii::t('app', 'Allow multiple answers'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
                    'disabled' => true,
                ]);
                ?>
            </div>

            <div class="checkbox">
                <?=
                Html::activeCheckbox($model, 'anonymous', [
                    'label' => Yii::t('app', 'Anonymous votes'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
                    'disabled' => true,
                ]);
                ?>
            </div>

            <div class="checkbox">
                <?=
                Html::activeCheckbox($model, 'show_vote', [
                    'label' => Yii::t('app', 'Show votes'),
                    'labelOptions' => [
                        'style' => 'padding-left:20px;'
                    ],
                    'disabled' => true,
                ]);
                ?>
            </div>

        </div>

    </div>

    <div class="secondtable"></div>

</div>
