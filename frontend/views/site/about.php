<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\google\GooglePlaceAutoload;
//use dosamigos\google\maps\LatLng;
//use dosamigos\google\maps\services\DirectionsWayPoint;
//use dosamigos\google\maps\services\TravelMode;
//use dosamigos\google\maps\overlays\PolylineOptions;
//use dosamigos\google\maps\services\DirectionsRenderer;
//use dosamigos\google\maps\services\DirectionsService;
//use dosamigos\google\maps\overlays\InfoWindow;
//use dosamigos\google\maps\overlays\Marker;
//use dosamigos\google\maps\Map;
//use dosamigos\google\maps\services\DirectionsRequest;
//use dosamigos\google\maps\overlays\Polygon;
//use dosamigos\google\maps\layers\BicyclingLayer;
use yii\grid\GridView;
use frontend\models\House;
//use ;
use voime\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
//$this->registerJsFile('/vova/frontend/APSMX-302/web/jquery.js', ['position' => yii\web\View::POS_END]);
//$this->registerJsFile('/vova/frontend/APSMX-302/web/ajax-poll.php', ['position' => yii\web\View::POS_END]);
?>
<!--<head>
   <script type="text/javascript" src="/vova/frontend/APSMX-302/web/jquery.js"></script>
    <script type="text/javascript" src="/vova/frontend/APSMX-302/web/ajax-poll.php"></script>
</head>-->
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>


    <div class="row"> 
        <?php
        echo GooglePlaceAutoload::widget(['location' => ['lat' => 50, 'lng' => 50]]);
        ?>
    </div>
    <div class='ajax-poll' tclass='poll-multi-choice' style='width:420px;'></div>



    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'street:ntext',
            'adress',
        // 'number',
        // 'letter',
        //   ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


    <?php
    $house1 = new House();
    $markers = [];

    $adress = $house1::find()->asArray()->all();

    //  echo $adress[0]['adress'];
//  $adress1=$adress[0]['id'];
//we take all houses at the moment withioun selecting any special UK
//      foreach ($adress as $number)  {
//       $markers.push
//      }

    echo "<pre>";
    foreach ($adress as $section => $items) {
        $s1 = 'Хабаровск,' . $items['street'] . ' ' . $items['number'] . $items['letter'];
        $s2 = $items['street'] . ' ' . $items['number'] . $items['letter'];
        array_push($markers, ['position' => $s1,
            'title' => $s2]);
        // echo 'Улица+ ' . $items['street'] . 'fff' . "</br";
        // foreach ($items as $key => $value)
        //      echo "$section:\t$key\t($value)<br>";
    }
    // echo 'proba';
    // var_dump($markers);
    // array_push($markers, [$key => $value]);
//    echo "</pre>";
//    echo "</br>";
//    echo $adress[0]['street'];
//    echo "</br>";
//    var_dump($markers);
//    echo "</br>";
//    foreach ($adress as $v1) {
//        foreach ($v1 as $v2) {
//            echo "$v2\n";
    // array_push($markers, $v2)push['positon'] = $v1 => 'street';
    // }
    //  echo "</br>";
    // }
//    $arr1 = array("a" => 1, "b" => 2, "c" => 3);
//    $arr2 = array("x" => 4, "y" => 5, "z" => 6);
//
//    foreach ($arr1 as $key => &$val) {
//        
//    }
//    foreach ($arr2 as $key => $val) {
//        
//    }
//
//    var_dump($arr1);
//    var_dump($arr2);
    //   $adress1 = $adress1 = 'Хабаровск, ул.' . $house1::find()->where(['id' => 1])->one()->street . ' ' . $house1::find()->where(['id' => 1])->one()->adress;
    echo Map::widget([
        'width' => '100%',
        'height' => '1000px',
        'mapType' => Map::MAP_TYPE_ROADMAP,
        'markers' => $markers,
        // [['position' => $adress1, 'title' => 'ул.Горького 60а'],
//                    ['position' => [48.478151, 135.163365], 'title' => 'ул.Горького 62а'],
//                    ['position' => [48.479005, 135.164515], 'title' => 'ул.Горького 60б'],
//                 ['position' => [48.478718, 135.163788], 'title' => 'ул.Горького 60в'],
//                
//                ['position' => [48.478475, 135.162787], 'title' => 'ул.Княжничная 1'],
//                ['position' => [48.478921, 135.162674], 'title' => 'ул.Княжничная 3'],
//                ['position' => [48.479722, 135.162566], 'title' => 'ул.Княжничная 5'],
//                ['position' => [48.479524, 135.163545], 'title' => 'ул.Княжничная 5а'],
        // ['position' => '', 'title' => 'ул.Горького 62','content' => 'InfoWindow content4', 'options' => ["icon" => "'https:developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'"]],
//        ул.Горького 60 а	48.477852, 135.163931
//ул.Горького 62 а	48.478151, 135.163365
//ул.Горького 60 б	48.479005, 135.164515
//ул.Горького 60 в	48.478718, 135.163788
//ул.Горького 62	1 368, 90
//ул.Княжничная 1	48.478475, 135.162787
//ул.Княжничная 3	48.478921, 135.162674
//ул.Княжничная 5	48.479722, 135.162566
//ул.Княжничная 5 а 48.479524, 135.163545
        //  ],
        'markerFitBounds' => true
    ]);
    ?>

    //<?php
//    $products = array(
//        'paper' => array(
//            'copier' => "Copier & Multipurpose",
//            'inkjet' => "Inkjet Printer",
//            'laser' => "Laser Printer",
//            'photo' => "Photographic Paper"),
//        'pens' => array(
//            'ball' => "Ball Point",
//            'hilite' => "Highlighters",
//            'marker' => "Markers"),
//        'misc' => array(
//            'tape' => "Sticky Tape",
//            'glue' => "Adhesives",
//            'clips' => "Paperclips"
//        )
//    );
//    echo "<pre>";
//    foreach ($products as $section => $items)
//        foreach ($items as $key => $value)
//            echo "$section:\t$key\t($value)<br>";
//    echo "</pre>";
//
//    echo $products['misc']['glue'];
//
//
//
//    $a = array();
//    $a[0][0] = "a";
//    $a[0][1] = "b";
//    $a[1][0] = "y";
//    $a[1][1] = "z";
//
//    foreach ($a as $v1) {
//        foreach ($v1 as $v2) {
//            echo "$v2\n";
//        }
//    }
//    
    ?>


    <?php
//   $house = new House();
//   $adress1=($house::find()->where(['id' => 1])->one()->adress);
//     echo GoogleMaps::widget([
//    'userLocations' => [
//        [
//            'location' => [
//                'address' => $adress1,
//                'country' => 'Ukraine',
//            ],
//            'htmlContent' => '<h1>Kharkov</h1>',
//        ],
//        
//    ],
//]);
    ?>     

    
</div>






</div>
