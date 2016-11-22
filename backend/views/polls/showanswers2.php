

<?php
use backend\models\PollsAnswers;
use backend\models\PollsAnswersSearch;

// $headers is an object of yii\web\HeaderCollection 
//$headers = Yii::$app->request->headers;

// returns the Accept header value
//$id_poll = $headers->get('id_poll');

//$id_poll=$_GET['id_poll'];

$request = Yii::$app->request;

//$get = $request->get();

if(empty($id_poll)){
   $id_poll=$request->get('id_poll');
}

//
//
//
//
//
//
// equivalent to: $get = $_GET;
//if(isset($_POST['id_poll']) && !empty($_POST['id_poll'])) {
//    $id_poll=$_POST['id_poll'];
//}
    
       $searchAnswersModel = new PollsAnswersSearch();
       $dataAnswersProvider = $searchAnswersModel->search([$searchAnswersModel->formName() => ['id_poll' => $id_poll]]);
        
        
        echo \Yii::$app->view->renderFile('@app/views/polls-answers/index_part.php', ['searchModel' => $searchAnswersModel,
            'dataProvider' => $dataAnswersProvider]);
        
   //     echo $id_poll;
    //  echo "aaaa";
    
    ?>

