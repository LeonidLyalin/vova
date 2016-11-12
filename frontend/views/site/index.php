<?php
/* @var $this yii\web\View */

use yii\bootstrap\Carousel;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron" style="padding-top: 0">
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

                <img src="Global-Network-icon 48.png" class="pull-left">

                <h4> ОТКРЫТОСТЬ</h4>

                <p>МЫ ОБЕСПЕЧИВАЕМ СВОБОДНЫЙ ДОСТУП ЖИТЕЛЕЙ К ИНФОРМАЦИИ О ДЕЯТЕЛЬНОСТИ, ТАРИФАХ И УСЛУГАХ, ПРАВИЛАХ ПРИЕМКИ И ОПЛАТЫ.</p>


                <div class="col-lg-4">
                    <img src="Satellite-icon 48.png" class="pull-left">
                    <h4>ПЕРСПЕКТИВА</h4>

                    <p>МЫ ВСЕГДА ИЗЛУЧАЕМ ОГРОМНЫЙ ПОЗИТИВНЫЙ ЗАРЯД И СТРОИМ ДОЛГОСРОЧНЫЕ ВЗАИМООТНОШЕНИЯ С НАШИМИ ЖИТЕЛЯМИ.</p>


                </div>
                <div class="col-lg-4">
                    <img src="gear-icon 48.png" class="pull-left">
                    <h4>ПРОФЕССИОНАЛИЗМ</h4>



                    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
                </div>
            </div>

        </div>
    </div>
