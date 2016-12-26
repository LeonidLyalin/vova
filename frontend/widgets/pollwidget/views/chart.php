<?php

//use frontend\widgets\pollwidget\models\Polls;
//use frontend\widgets\pollwidget\models\PollsAnswers;
//use frontend\widgets\pollwidget\models\PollsResult;
//use frontend\widgets\pollwidget\models\PollsResultSearch;


use yii\bootstrap\Progress;
use yii\helpers\Html;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="polls-result-show">

    <h2><?= Html::encode($question) ?></h2>
    <h3><?= Html::encode(Yii::t('frontend', "Poll results")) ?></h3>

    <?

    /**
     * sort function for array
     * @param type $a
     * @param type $b
     * @return int
     */
    function cmp($a, $b) {
        if ($a['res'] == $b['res']) {
            return 0;
        }
        return ($a['res'] > $b['res']) ? -1 : 1;
    }

    $model = $dataProvider->getModels();
    $res = array();
    foreach ($model as $answer) {
        $res[] = ['answer' => $answer->idAnswer->answer, 'res' => $answer->res];
    }
    usort($res, "cmp");
    $maxval = intval($res[0]['res']);
    foreach ($res as $val) {
        echo "<h3>" . $val['answer'] . "  " . $val['res'] . "</h3>";
        echo Progress::widget([
            'percent' => intval($val['res']) / $maxval * 100,
        ]);
    }
    ?>

</div>
