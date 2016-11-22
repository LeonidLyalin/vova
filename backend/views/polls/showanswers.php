

<?php
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;

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

