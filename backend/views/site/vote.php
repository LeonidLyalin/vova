<?php
/**
 * try to render vote widgets from humhub
 */
//use yii\web\View;

use common\modules\polls\widgets\WallEntry;

/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Голосование');
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Try to use poll from humhub</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8"
        
    </head>
    <body>
        <div id="vote"></div>
       

            <?=        WallEntry::widget([]); ?>
            

       
    </body>
</html>


/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
