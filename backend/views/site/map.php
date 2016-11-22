<?php

use yii\web\View;
/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Карта');
$this->params['breadcrumbs'][] = $this->title;

$url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDyglyP6P90-bPnZY5zMHHRcB8e7hOXuFg&callback=initMap";
//$options=yii\web\View::POS_HEAD;
$this->registerJs('var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                });
            }',yii\web\View::POS_HEAD);
$this->registerJsFile($url, ['position'=>yii\web\View::POS_END]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="map"></div>
        <script>

            

        </script>
<!--        <script src=""
        async defer></script>-->
    </body>
</html>


/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

