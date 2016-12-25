<?php
/* @var $this View */

use frontend\models\HouseSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Tabs;
use yii\web\View;

/* @var $this View */
/* @var $searchModel HouseSearch */
/* @var $dataProvider ActiveDataProvider */



$this->title = Yii::t('frontend', 'Info');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <? $content = '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60 а.pdf') . '">Отчет за 2013 Горького 60 а.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60Б.pdf') . '">Отчет за 2013 Горького 60Б.pdf</a></br>' ?>   
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60Б.pdf') . '">Отчет за 2013 Горького 60Б.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60В.pdf') . '">Отчет за 2013 Горького 60В.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 62 а.pdf') . '">Отчет за 2013 Горького 62 а.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 62.pdf') . '">Отчет за 2013 Горького 62.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 1.pdf') . '">Отчет за 2013 Княжничная 1.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 3.pdf') . '">Отчет за 2013 Княжничная 3.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 5.pdf') . '">Отчет за 2013 Княжничная 5.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 5А.pdf') . '">Отчет за 2013 Княжничная 5А.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Бухгалтерский баланс за 2013 г.pdf') . '">Бухгалтерский баланс за 2013 г.docx</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60 а.pdf') . '">Отчет за 2014 Горького 60 а.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2012 ул.Большая 12.pdf') . '">Отчет за 2012 ул.Большая 12.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 ул.Большая 12.pdf') . '">Отчет за 2013 ул.Большая 12.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Использование общего имущества.pdf') . '">Использование общего имущества.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60Б.pdf') . '">Отчет за 2014 Горького 60Б.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Бухгалтерская отчетность за 2014 г.pdf') . '">Бухгалтерская отчетность за 2014 г.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60В.pdf') . '">Отчет за 2014 Горького 60В.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 62 а.pdf') . '">Отчет за 2014 Горького 62 а.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 62.pdf') . '">Отчет за 2014 Горького 62.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 1.pdf') . '">Отчет за 2014 Княжничная 1.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 3.pdf') . '">Отчет за 2014 Княжничная 3.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 5.pdf') . '">Отчет за 2014 Княжничная 5.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 5А.pdf') . '">Отчет за 2014 Княжничная 5А.pdf</a></br>' ?>



    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60А.pdf') . '">отчет за 2015 Горького 60А.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60Б.pdf') . '">отчет за 2015 Горького 60Б.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60В.pdf') . '">отчет за 2015 Горького 60В.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 62.pdf') . '">отчет за 2015 Горького 62.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 62А.pdf') . '">отчет за 2015 Горького 62А.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 1.pdf') . '">отчет за 2015 Княжничная 1.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 3.pdf') . '">отчет за 2015 Княжничная 3.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 5.pdf') . '">отчет за 2015 Княжничная 5.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 5А.pdf') . '">отчет за 2015 Княжничная 5А.pdf</a></br>' ?>
    <? $content .= '<a href="' . Url::to('@web/files/report/БАЛАНС.pdf') . '">БАЛАНС.pdf</a></br>' ?>


    <? $content2 = '<a href="' . Url::to('@web/files/agreement/Проект договора.doc') . '" download>Проект договора.doc</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД от 04.05.14 Княжничная 1.docx') . '" download>Договор управления МКД от 04.05.14 Княжничная 1.docx</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД от 30.04.14 Ул.Горького 62А.docx') . '" download>Договор управления МКД от 30.04.14 Ул.Горького 62А.docx</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД №13 от 29.03.11 Горького 60А.docx') . '" download>Договор управления МКД №13 от 29.03.11 Горького 60А.docx</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор №203 управления МКД от 01.11.11 Горького 60Б.docx') . '" download>Договор №203 управления МКД от 01.11.11 Горького 60Б.docx</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор №203 управления МКД от 01.11.11 Горького 60В.docx') . '" download>Договор №203 управления МКД от 01.11.11 Горького 60В.docx</a></br>' ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления Княжничная3,5,5А.docx') . '" download>Договор управления Княжничная3,5,5А.docx</a></br>' ?>

    <? $content3 = '<a href="' . Url::to('@web/files/price/Стоимость работ, услуг по управлению МКД Княжничная 1.doc') . '" download>Стоимость работ, услуг по управлению МКД Княжничная 1.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ (услуг) по управлению МКД Горького 62А.doc') . '" download>Стоимость работ (услуг) по управлению МКД Горького 62А.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ, услуг по управлению МКД Горького 60А.doc') . '" download>Стоимость работ, услуг по управлению МКД Горького 60А.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Горького 60Б.docx') . '" download>Стоимость работ услуг по управлению МКД Горького 60Б.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Горького 60В.docx') . '" download>Стоимость работ услуг по управлению МКД Горького 60В.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Княжничная 5А,3,5.docx') . '" download>Стоимость работ услуг по управлению МКД Княжничная 5А,3,5.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Протокол собрания собственников Горького 62.docx') . '" download>Протокол собрания собственников Горького 62.docx</a></br>' ?>

    <? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на эл.энергию.docx') . '" download>Об установлении цен на эл.энергию.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на хол.воду.docx') . '" download>Об установлении цен на хол.воду.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на водоотведение.docx') . '" download>Об установлении цен на водоотведение.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Тарифы на коммунальные услуги на 2015.docx') . '" download>Тарифы на коммунальные услуги на 2015.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Постановление Правительства Хаб.края №174-пр от 28.06.13.docx') . '" download>Постановление Правительства Хаб.края №174-пр от 28.06.13.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/ПОСТАНОВЛЕНИЕ ПРАВИТЕЛЬСТВА ХАБАРОВСКОГО КРАЯ №388-пр от 31.10.12 (в ред. от 12.12.14).docx') . '" download>ПОСТАНОВЛЕНИЕ ПРАВИТЕЛЬСТВА ХАБАРОВСКОГО КРАЯ №388-пр от 31.10.12 (в ред. от 12.12.14).docx</a></br>' ?>

    <? $content4 = '<a href="' . Url::to('@web/files/minutes/Протокол собрания собственников Горького 62.docx') . '" download>Протокол собрания собственников Горького 62.docx</a></br>' ?>


    <? $content4 .= '<a href="' . Url::to('@web/files/minutes/Протокол собрания 15.06.15 Княжничная 5.docx') . '" download>Протокол собрания 15.06.15 Княжничная 5.docx</a></br>' ?>
    <? $content4 .= '<a href="' . Url::to('@web/files/minutes/Протокол 15.06.15 ул.Княжничная 5А.docx') . '" download>Протокол 15.06.15 ул.Княжничная 5А.docx</a></br>' ?>

    <? $content5 = '<a href="' . Url::to('@web/files/pasports/ПАСПОРТ ОБЪЕКТОВ.xlsx') . '" download>ПАСПОРТ ОБЪЕКТОВ.xlsx</a></br>' ?>


    <?=
    Tabs::widget([
        'items' => [
            [
                'label' => Yii::t('frontend', 'Reports'),
                'content' => $content,
                'active' => true
            ],
            [
                'label' => Yii::t('frontend', 'Agreements'),
                'content' => $content2,
            ],
            [
                'label' => Yii::t('frontend', 'Price'),
                'content' => $content3,
            ],
            [
                'label' => Yii::t('frontend', 'Minutes'),
                'content' => $content4,
            ],
            [
                'label' => Yii::t('frontend','More...'),
                'items' => [
                    [
                        'label' => Yii::t('frontend', 'Pasports'),
                        'content' => $content5,
                    ],
                    [
                        'label' => Yii::t('frontend', 'Administrative proceedings'),
                        'content' => '<h4>2013 г-случаев привлечения к административной ответственности не имеется</br>' .
                        '2014 г-случаев привлечения к административной ответственности не имеется</br>' .
                        '2015 г-случаев привлечения к административной ответственности не имеется</br></h4>'
                    ],
                ]
            ]
        ]
    ]);
    ?>



</div>





