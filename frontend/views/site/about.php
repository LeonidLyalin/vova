<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
//use frontend\widgets\google\GooglePlaceAutoload;
use yii\grid\GridView;
use frontend\models\House;
use voime\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = Yii::t('frontend', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<?= $this->render('aboutChinese') ?>
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
//    $house1 = new House();
//    $markers = [];
//
//    $adress = $house1::find()->asArray()->all();
//
//
//
//    echo "<pre>";
//    foreach ($adress as $section => $items) {
//        $s1 = 'Хабаровск,' . $items['street'] . ' ' . $items['number'] . $items['letter'];
//        $s2 = $items['street'] . ' ' . $items['number'] . $items['letter'];
//        array_push($markers, ['position' => $s1,
//            'title' => $s2]);
//       
//    }
//    
//    echo Map::widget([
//        'width' => '100%',
//        'height' => '1000px',
//        'mapType' => Map::MAP_TYPE_ROADMAP,
//        'markers' => $markers,
//        'markerFitBounds' => true
//    ]);
    ?>   
    <div class="row">

        <?=
        Map::widget([
            'width' => '80%',
            'height' => '400px',
            'mapType' => Map::MAP_TYPE_HYBRID,
            'markers' => [
                ['position' => [48.477852, 135.163931], 'title' => 'ул.Горького 60а'],
                ['position' => [48.478151, 135.163365], 'title' => 'ул.Горького 62а'],
                ['position' => [48.479005, 135.164515], 'title' => 'ул.Горького 60б'],
                ['position' => [48.478718, 135.163788], 'title' => 'ул.Горького 60в'],
                ['position' => [48.478475, 135.162787], 'title' => 'ул.Княжничная 1'],
                ['position' => [48.478921, 135.162674], 'title' => 'ул.Княжничная 3'],
                ['position' => [48.479722, 135.162566], 'title' => 'ул.Княжничная 5'],
                ['position' => [48.479524, 135.163545], 'title' => 'ул.Княжничная 5а'],
            ],
            'markerFitBounds' => true
        ]);
        ?>

    </div>






</div>
