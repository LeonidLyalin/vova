<?php
/* @var $this View */

use frontend\widgets\pollwidget\PollWidget;
use yii\bootstrap\Carousel;
use yii\helpers\Url;
use yii\web\View;

$this->title = Yii::t('frontend','House company');
?>
<div class="site-index">

    <div class="jumbotron" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="row">
            <?php
            echo Carousel::widget([
                'items' => [
                        [
                        'content' => '<img  class="img-responsive" src="' . Url::to("@web/images/slide5.jpg") . '"/>',
                        'caption' => '',
                        'options' => []
                    ],
                        [
                        'content' => '<img class="img-responsive" src="' . Url::to("@web/images/slide2.jpg") . '"/>',
                        'caption' => '',
                        'options' => []
                    ],
                        [
                        'content' => '<img class="img-responsive" src="' . Url::to("@web/images/slide3.jpg") . '"/>',
                        'caption' => '',
                        'options' => []
                    ],
                        [
                        'content' => '<img class="img-responsive" src="' . Url::to("@web/images/slide4.jpg") . '"/>',
                        'caption' => '',
                        'options' => []
                    ]
                ],
                'options' => [
                    //'style' => 'width:800px;height:600px;',
                    'style' => '@media only screen and (min-width: 768px) {'.
                    'width:100%;height:150px;}'.
                    '@media only screen and (min-width: 962px) {'.
                    'width:100%;height:300px;}'.
                    '@media only screen and (min-width: 1200px) {'.
                    'width:100%;height:400px;}'
                   
                    //'margin: auto;' // Задаем ширину контейнера
                ]
            ]);
            ?>
        </div>
    </div>

    <div class="body-content">

        <div class="row" style="background-color: lightyellow">
            <div class="col-lg-4">
                <div class="row">

                    <img src="<?= Url::to('@web/images/Global-Network-icon 48.png') ?>" class="pull-left">

                    <h4 style="padding-left: 50px"><?=Yii::t('home','OPENNESS')?>
                        </h4>
                </div>
                <p><?=Yii::t('home','WE PROVIDE FREE RESIDENTS ACCESS TO INFORMATION ON ACTIVITIES, TARIFFS AND SERVICES, REGULATIONS AND ACCEPTANCE OF PAYMENT.')?></p>
                   <?// МЫ ОБЕСПЕЧИВАЕМ СВОБОДНЫЙ ДОСТУП ЖИТЕЛЕЙ К ИНФОРМАЦИИ О ДЕЯТЕЛЬНОСТИ, ТАРИФАХ И УСЛУГАХ, ПРАВИЛАХ ПРИЕМКИ И ОПЛАТЫ.?>

            </div> 
            <div class="col-lg-4">
                <div class="row">
                    <img src="<?= Url::to('@web/images/Satellite-icon 48.png') ?>" class="pull-left">

                    <h4 style="padding-left: 50px"><?=Yii::t('home','PERSPECTIVE')?></h4>
                </div>
                <p><?=Yii::t('home','WE ALWAYS EMIT A HUGE POSITIVE CHARGE AND BUILD LONG-TERM RELATIONSHIPS WITH OUR RESIDENTS.')?></p>


            </div>
            <div class="col-lg-4">
                <div class="row">
                    <img src="<?= Url::to('@web/images/gear-icon 48.png') ?>" class="pull-left">
                    <h4 style="padding-left: 50px"> <?=Yii::t('home','PROFESSIONALISM')?></h4>
                </div>

                <p><?=Yii::t('home','WE PROVIDE QUALITY MAINTENANCE SERVICES, MAINTENANCE AND REPAIRS OF APARTMENT BUILDINGS. RESIDENT - OUR TOP PRIORITY!')?></p>


            </div>
        </div>
        <div class="container">
            <h1 style="padding-bottom: 50"><?=Yii::t('home','THE LIST OF SERVICES')?></h1>

            <h3><?=Yii::t('home','We provide a full range of housing services for the management and maintenance of apartment buildings in the city of Khabarovsk.')?></h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= Url::to('@web/images/page1-img1.jpg') ?>">
                    <a href="#"><?=Yii::t('home','GENERAL INSPECTION')?></a>
                    <p><?=Yii::t('home','Inspection of the common property of homes to identify inconsistencies with legal requirements of the Russian Federation')?></p>
                </div>
                <div class="col-md-3">
                    <img src="<?= Url::to('@web/images/page1-img2.jpg') ?>">
                    <a href="#"><?=Yii::t('home','LIGHTING')?></a>
                    <p><?=Yii::t('home','Support for lighting of common areas in apartment buildings')?></p>
                </div>
                <div class="col-md-3">
                    <img src="<?= Url::to('@web/images/page1-img3.jpg') ?>">
                    <a href="#"><?=Yii::t('home','CLIMATE SUPPORT')?></a>
                    <p><?=Yii::t('home','Ensuring the optimum temperature and humidity in the common areas')?></p>
                </div>
                <div class="col-md-3">
                    <img src="<?= Url::to('@web/images/page1-img4.jpg') ?>">
                    <a href="#"><?=Yii::t('home','CLEANING')?></a>
                    <p><?=Yii::t('home','Timely cleaning and sanitary cleaning of the common areas')?></p>
                </div>

            </div>
        </div>
        <div class="row">
            <?= PollWidget::widget(); ?>
        </div>
    </div>
</div>
