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
    
   <?php 
   if (Yii::$app->language === 'ru-ru'){
       $this->render('aboutRussian',[]);
   } else {
       $this->render('aboutEnglish',[]) ;
   }
   
   ?>
<?php
/*
 * view for English
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<p style = "text-align: center;"> <span style = "font-size: x-large;"> <span style = "font-family: Verdana;"> <?= Yii::t('about', 'LLC "JUBILEE" ') ?></span > </span>
</p>
<p style = "text-align: center;"> <?= Yii::t('about', 'BIN 1102721007168 INN 2721179894 CAT 272101001') ?> </p>
<p style = "text-align: center;"> <?= Yii::t('about', 'Certificate of state registration of legal entities registered with the Inspectorate of the Federal Tax Service for the Central District of Khabarovsk №001723435 series of 27 November  2010') ?></p>.
<table style = "width: 100%;" border = "0" cellspacing = "0" cellpadding = "0">
        <colgroup>
                <col width = "158" />
                <col width = "206" /> </colgroup>
        <tbody>
                <tr height = "28">
                        <td width = "158" height = "28" class = "tablenoborder"><?= Yii::t('about', 'Address:') ?> </td>
                        <td width = "206" class = "tablenoborder"> 680052 &nbsp; &nbsp; <?= Yii::t('about', 'Khabarovsk, Gorkogo 60B') ?> </td>
                    </tr>
                <tr height = "20">
                        <td width = "158" height = "20" class = "tablenoborder"> <?= Yii::t('about', 'Postal address:') ?></td>
                        <td width = "206" class = "tablenoborder"> 680052 <?= Yii::t('about', 'Khabarovsk, Gorkogo 60') ?> </td>
                    </tr>
                <tr height = "28">
                        <td width = "158" height = "28" class = "tablenoborder"> <?= Yii::t('about', 'Address of actual location:') ?> </td>
                        <td width = "206" class = "tablenoborder"> 680052 <?= Yii::t('about', 'Khabarovsk, Gorkogo 60') ?> </td>
                    </tr>
                <tr height = "20">
                        <td width = "158" height = "20" class = "tablenoborder"> <?= Yii::t('about', 'Director:') ?> </td>
                        <td width = "206" class = "tablenoborder"> <?= Yii::t('about', 'Kim Sergey Voncherovich') ?> </td>
                    </tr>
                <tr height = "50">
                        <td width = "158" height = "50" class = "tablenoborder"> <?=Yii::t('about','Business hours:')?> </td>
                        <td width = "206" class = "tablenoborder"> <?= Yii::t('about', 'Monday-Friday: from 9-00 to 17-00') ?>, &nbsp; &nbsp; <?= Yii::t('about', 'Closed: Saturday, Sunday') ?> </td>
                    </tr>
                <tr height = "18">
                        <td width = "158" height = "18" class = "tablenoborder"> <?= Yii::t('about', 'Admission Director:') ?> </td>
                        <td width = "206" class = "tablenoborder"> &nbsp; <?= Yii::t('about', 'During business hours') ?> &nbsp; <?= Yii::t('about', 'Monday') ?> &nbsp; - <?= Yii::t('about', 'Friday') ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                    </tr>
                <tr height = "33">
                        <td width = "158" height = "33" class = "tablenoborder"> <?= Yii::t('about', 'Accounting Admission:') ?> </td>
                        <td width = "206" class = "tablenoborder"> &nbsp; <?= Yii::t('about', 'During business hours') ?> &nbsp; &nbsp; <?= Yii::t('about', 'Monday - Thursday') ?> </td>
                    </tr>
                <tr height = "34">
                        <td width = "158" height = "34" class = "tablenoborder"> <?= Yii::t('about', 'Manager:') ?> </td>
                        <td width = "206" class = "tablenoborder"> (4212) 31-62-58, 8 -914-776-67-61 (clock) </td>
                    </tr>
                <tr height = "22">
                        <td width = "158" height = "22" class = "tablenoborder"> E-mail: </td>
                        <td width = "206" class = "tablenoborder">
                                <p> <a href="mailto:uk-yubil@yandex.ru"> uk-yubil@yandex.ru </a> </p>
                            </td>
                    </tr>
            </tbody>
</table>
<p style = "text-align: center; color: #333333; line-height: 15px; font-family: Verdana; font-size: 12px; margin-top: 0px; margin-bottom: 5px;"> <span style = "font-size: x-large; font-family: Calibri; line-height: normal;"> <?=Yii::t('about','LLC  "JUBILEE" manages content, repair and overhaul of the housing stock')?> </span> </p>.
<p style = "margin-top: 0px; margin-bottom: 5px; color: #333333; font-family: Verdana; font-size: 12px; line-height: 15px; text-align: left;"> &nbsp; </p>
<p style="color: #333333; line-height: 15px; font-family: Verdana; font-size: 12px; margin-top: 0px; margin-bottom: 5px; text-align: center;"> <strong class = "pagetext"> <span style = "font-size: large;"> <?=Yii::t('about','Information about the services rendered by the company "JUBILEE»')?> </span> </strong> </p>
<p style = "text-align: justify;"> <span class = "pagetext"> <span style = "font-size: medium;"> &nbsp; &nbsp; &nbsp; 1. <?=Yii::t('about','Content of the common property depending on the composition, design features, the degree of physical wear and tear and maintenance &nbsp; the status of the common property, as well as depending on the geodetic and climatic conditions of the location of the house includes:')?> </span> </span>
</p>
<ul style = "text-align: justify;">
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','inspection of the common property, ensuring the timely identification mismatch common property law requirements state the Russian Federation, as well as security threats to the lives and health of citizens;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','lighting of public spaces;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','maintenance  temperature according to Russian Federation legislation and humidity in common areas;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','cleaning and sanitary cleaning of the common areas, as well as land section, which is part of the common property;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','collection and disposal of municipal solid waste;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','fire safety measures in accordance with the Russian legislation on fire safety;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','content and care elements of landscaping and beautification;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','maintenance of ventilation channels;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','Maintenance of lifting equipment;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','examination, diagnosis, and insurance of lifting equipment;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','service-house gas equipment;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','disinfection, disinfestation common property of an apartment building;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','Maintenance of metering devices;')?> </span> </span>
                    </span>
            </li>
</ul>
<p> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> &nbsp; &nbsp;&nbsp; 2. <?=Yii::t('about','Current fixing and Repair')?> </span> </span>
            </span>
</p>
<p> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> &nbsp; &nbsp; &nbsp; 3.<?=Yii::t('about','Services associated with the achievement of the control objectives of the apartment building')?> </span> </span>
            </span>
</p>
<ul style = "text-align: justify;">
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','sign contracts with contractors to perform work on the content, the current and overhaul of the common property of the apartment building and its preparation for seasonal operation, contracts with resources organizations for the supply of resources;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','control over the implementation of agreements;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','the conclusion of contracts for the maintenance and repair of common property with the tenants and owners of non-residential premises;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','organizing and providing round the clock emergency service dispatcher of apartment buildings;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','maintain a database of technical condition of apartment buildings, making repairs, inspections, work performed, payment calculation base data, with the formation of each year during the first quarter of the current year for each apartment building financial report for the previous year;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','design of the personal account, the changes in the personal account;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','the issuance of extracts from the personal account;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','the collection, processing payments from the residents and settlements with the residents;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','integrated processing payments of the residents;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','payments to utility services providers;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','holding charges on personal accounts;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','conducting clearing personal accounts for low-quality provision of utility services, in connection with the temporary absence of living at the place of registration;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','account balances on personal accounts;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','monthly payment and payment for utility services issue a single payment document;')?> </span> </span>
                    </span>
            </li>
        <li> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> <?=Yii::t('about','receive payments from the residents for housing, utilities and other services;')?> </span> </span>
                    </span>
            </li>
        <li> <span style="font-size: small;"> <span class="pagetext"> <span style="font-size: medium;"> <?=Yii::t('about','conduct claim work with the residents, with the owners and tenants of non-residential facilities;')?> </span> </span>
                    </span>
            </li>
</ul>
<p> <span style = "font-size: small;"> <span class = "pagetext"> <span style = "font-size: medium;"> &nbsp; &nbsp; &nbsp; 4. <?=Yii::t('about','Other services:')?> </span> </span>
            </span>
</p>
<ul style = "text-align: justify;">
        <li style="text-align: justify;"> <span style="font-size: small;"> <span class="pagetext"> <span style="font-size: medium;"> <?=Yii::t('about','contracts from behalf of owners of premises in an apartment building contracts on the use of common property owners of premises in an apartment building, including the installation of fiber-optic communication lines and telecommunications equipment, installation contracts and maintenance of advertising structures, signage and other information structures.')?> </span> </span>
                    </span>
            </li>
</ul>


<p style = "text-align: justify;"> <span style = "color: #000000; font-family: Times New Roman; font-size: small;"> </span> </p>
<p style = "margin: 0cm 0cm 0pt;"> <span style = "color: #000000; font-family: Times New Roman; font-size: small;"> </span> </p>
<p style = "margin: 0cm 0cm 0pt;"> <span style = "font-size: small;"> </span> </p>
<p style = "margin: 0cm 0cm 0pt;"> <strong style = "mso-bidi-font-weight: normal;"> <span class = "pagetext"> <span style = "font-size: medium;" > <?=Yii::t('about','The list of apartment buildings under management')?> </span> </span> </strong> </p>
<p style = "margin: 0cm 0cm 0pt;"> <span class = "pagetext"> <span style = "font-size: medium;"> </span> </span> </p>
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
