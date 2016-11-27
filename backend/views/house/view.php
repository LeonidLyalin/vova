<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use voime\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $model backend\models\House */
echo "dfff";
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Дома'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//$this->registerJsFile("https://code.jquery.com/jquery-1.10.2.js");
?>
<div class="house-view">



    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Изменить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Вы уверены, что хотите удалить?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'street:ntext',
            'number',
            'letter',
        ],
    ])
    ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA44qDfpv4Qw3affwiOAAhKOtcu7Duqfko&callback=initMap">
            </script>  

    <?php

    // function to geocode address, it will return false if unable to geocode address
    function geocode($address) {

        // url encode the address
        $address = urlencode($address);

        // google map geocode api url
        $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";

        // get the json response
        $resp_json = file_get_contents($url);

        // decode the json
        $resp = json_decode($resp_json, true);

        // response status will be 'OK', if able to geocode given address 
        if ($resp['status'] == 'OK') {

            // get the important data
            $lati = $resp['results'][0]['geometry']['location']['lat'];
            $longi = $resp['results'][0]['geometry']['location']['lng'];
            $formatted_address = $resp['results'][0]['formatted_address'];

            // verify if data is complete
            if ($lati && $longi && $formatted_address) {

                // put the data in the array
                $data_arr = array();

                array_push(
                        $data_arr, $lati, $longi, $formatted_address
                );

                return $data_arr;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    ?>
    <!--insert google maps -->
    <div>

        <?php
//if($_POST){
        // get latitude, longitude and formatted address
        $adr = 'Хабаровск, ул. ' . $model->street . ' ' . $model->number . $model->letter;
        echo $adr . "</br>";
        $data_arr = geocode($adr);
        //$_POST['address']);
        var_dump($data_arr);

        // if able to geocode the address
        if ($data_arr) {

            $latitude = $data_arr[0];
            echo $latitude . "</br>";
            $longitude = $data_arr[1];
            echo $longitude . "</br>";
            $formatted_address = $data_arr[2];
            echo $formatted_address . "</br>";
            ?>

            <!-- google map will be shown here -->
            <div id="gmap_canvas">Loading map...</div>
            <div id='map-label'>Map shows approximate location.</div>
<!--            <script>
                //var mv = document.getElementById("gmap_canvas");
                //mv.text("ffddd");

                $("#gmap_canvas").css("color", "red");
                $("#gmap_canvas").text("fffffff");
                $("#notMe").css("color", "red");
            </script>-->


            <!-- JavaScript to show google map -->


             
            <script>
                function init_map() {
                    var myOptions = {
                        zoom: 14,
                        center: new google.maps.LatLng(' . $latitude . ', ' . $longitude . '),
                        //center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };


                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(' . $latitude . ', ' . $longitude . ')
                                //  position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
                    });
                    infowindow = new google.maps.InfoWindow({
                        content: "<?php echo $formatted_address; ?>"
                    });
                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }

                google.maps.event.addDomListener(window, "load", init_map);



            </script>
    <?php
    // if unable to geocode the address
} else {
    echo "No map found.";
}
//}
?>
        <?php
//        $markers = [];
//        array_push(
//                $markers, ['position' => [$latitude, $longitude],
//            'title' => $adr]);
//        var_dump($markers);
//        echo Map::widget([
//            'width' => '100%',
//            'height' => '1000px',
//            'mapType' => Map::MAP_TYPE_ROADMAP,
//            'markers' => $markers,
//            // [['position' => $adress1, 'title' => 'ул.Горького 60а'],
//            //   ['position' => [$latitude, $longitude], 'title' => $adr],
//            'markerFitBounds' => true
//        ]);
        ?>

    </div>

</div>
