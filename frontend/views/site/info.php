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
    <? $content = '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60 а.pdf') . '">Отчет за 2013 Горького 60 а.pdf</a></br>'?>
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

    <? $content3 = '<a href="' . Url::to('@web/files/agreement/Стоимость работ, услуг по управлению МКД Княжничная 1.doc') . '" download>Стоимость работ, услуг по управлению МКД Княжничная 1.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Стоимость работ (услуг) по управлению МКД Горького 62А.doc') . '" download>Стоимость работ (услуг) по управлению МКД Горького 62А.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Стоимость работ, услуг по управлению МКД Горького 60А.doc') . '" download>Стоимость работ, услуг по управлению МКД Горького 60А.doc</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Стоимость работ услуг по управлению МКД Горького 60Б.docx') . '" download>Стоимость работ услуг по управлению МКД Горького 60Б.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Стоимость работ услуг по управлению МКД Горького 60В.docx') . '" download>Стоимость работ услуг по управлению МКД Горького 60В.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Стоимость работ услуг по управлению МКД Княжничная 5А,3,5.docx') . '" download>Стоимость работ услуг по управлению МКД Княжничная 5А,3,5.docx</a></br>' ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/agreement/Протокол собрания собственников Горького 62.docx') . '" download>Протокол собрания собственников Горького 62.docx</a></br>' ?>



    <?=
    Tabs::widget([
        'items' => [
            [
                'label' => 'Отчеты',
                'content' => $content,
                'active' => true
            ],
            [
                'label' => 'Договора',
                'content' => $content2,
            ],
            [
                'label' => 'Стоимость',
                'content' => $content3,
            ],
            [
                'label' => 'Еще табы',
                'content' => '<h2>Вы можете добавить любое количество табов. Просто опишите их структуру в массиве.</h2>'
            ],
            [
                'label' => 'Выпадающий список табов',
                'items' => [
                    [
                        'label' => 'Первый таб из выпадающего списка',
                        'content' => '<h2>Обновите свои познания в Yii 2 and Twitter Bootstrap. Все возможнсти уже обернуты в удобные интерфейсы.</h2>'
                    ],
                    [
                        'label' => 'Второй таб из выпадающего списка',
                        'content' => '<h2>Один в поле не воин, а двое - уже компания.</h2>'
                    ],
                    [
                        'label' => 'Это третий таб из выпадающего списка',
                        'content' => '<h2>Третий не лишний!</h2>'
                    ]
                ]
            ]
        ]
    ]);
    ?>



</div>

    



