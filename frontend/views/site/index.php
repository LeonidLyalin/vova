<?php
/* @var $this yii\web\View */

use yii\bootstrap\Carousel;
use davidjeddy\yii2poll\Poll;

$this->title = 'Управляющая компания';
?>
<div class="site-index">

    <div class="jumbotron" style="padding-top: 0; padding-bottom: 0">
        <?php
        echo Carousel::widget([
            'items' => [
//        [
//        'content' => '<img src="slide1.png"/>',
//        'caption' => '<h2>Yii Gii</h2><p>Удобный встроенный генератор кода. Модули, модели на основе таблиц в БД и, конечно же, CRUD</p>',
//        'options' => []
//        ],
                    [
                    'content' => '<img  src="slide2.jpg"/>',
                    'caption' => '', //'<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
                    'options' => []
                ],
                    [
                    'content' => '<img src="slide3.jpg"/>',
                    'caption' => '', //<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
                    'options' => []
                ]
            ],
//      'options' => [
//        'style' => 'width:474px;' // Задаем ширину контейнера
//        ]
        ]);
        ?>
    </div>

    <div class="body-content">

        <div class="row" style="background-color: lightyellow">
            <div class="col-lg-4">
                <div class="row">

                    <img src="Global-Network-icon 48.png" class="pull-left">

                    <h4> ОТКРЫТОСТЬ</h4>
                </div>
                <p>МЫ ОБЕСПЕЧИВАЕМ СВОБОДНЫЙ ДОСТУП ЖИТЕЛЕЙ К ИНФОРМАЦИИ О ДЕЯТЕЛЬНОСТИ, ТАРИФАХ И УСЛУГАХ, ПРАВИЛАХ ПРИЕМКИ И ОПЛАТЫ.</p>

            </div> 
            <div class="col-lg-4">
                <div class="row">
                    <img src="Satellite-icon 48.png" class="pull-left">

                    <h4> ПЕРСПЕКТИВА</h4>
                </div>
                <p>МЫ ВСЕГДА ИЗЛУЧАЕМ ОГРОМНЫЙ ПОЗИТИВНЫЙ ЗАРЯД И СТРОИМ ДОЛГОСРОЧНЫЕ ВЗАИМООТНОШЕНИЯ С НАШИМИ ЖИТЕЛЯМИ.</p>


            </div>
            <div class="col-lg-4">
                <div class="row">
                    <img src="gear-icon 48.png" class="pull-left">
                    <h4> ПРОФЕССИОНАЛИЗМ</h4>
                </div>

                <p>МЫ ПРЕДОСТАВЛЯЕМ КАЧЕСТВЕННЫЕ УСЛУГИ ПО ОБСЛУЖИВАНИЮ, СОДЕРЖАНИЮ И РЕМОНТУ МНОГОКВАРТИРНЫХ ДОМОВ. ЖИТЕЛЬ – НАШ ГЛАВНЫЙ ПРИОРИТЕТ!</p>


            </div>
        </div>
        <div class="container">
            <h1 style="padding-bottom: 5">ПЕРЕЧЕНЬ ОКАЗЫВАЕМЫХ УСЛУГ</h1>

            <h3>Мы оказываем полный спектр жилищных услуг по управлению и обслуживанию многоквартирных домов в г. Хабаровске.</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="page1-img1.jpg">
                    <a href="#">ОБЩИЙ ОСМОТР</a>
                    <p>Осмотр общего имущества домов на выявление несоответствия требованиям законодательства РФ</p>
                </div>
                <div class="col-md-3">
                    <img src="page1-img2.jpg">
                    <a href="#">ОСВЕЩЕНИЕ</a>
                    <p>Поддержка освещения мест общего пользования в многоквартирных домах</p>
                </div>
                <div class="col-md-3">
                    <img src="page1-img3.jpg">
                    <a href="#">ПОДДЕРЖКА КЛИМАТА</a>
                    <p>Обеспечение оптимальной температуры и влажности в помещениях общего пользования</p>
                </div>
                <div class="col-md-3">
                    <img src="page1-img4.jpg">
                    <a href="#">УБОРКА И ОЧИСТКА</a>
                    <p>Своевременная уборка и санитарно-гигиеническая очистка помещений общего пользования</p>
                </div>

            </div>
        </div>
       
    </div>
</div>
