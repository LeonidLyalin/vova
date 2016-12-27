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
    <?
    $content = '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60 а.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 60 a.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60Б.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 60B.pdf') . '</a></br>'
    ?>   
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60Б.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 60B.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 60В.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 60V.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 62 а.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 62 a.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Горького 62.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Gorkogo 62.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 1.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Knyazhnichnaya 1.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 3.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Knyazhnichnaya 3.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 5.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Knyazhnichnaya 5.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2013 Княжничная 5А.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Knyazhnichnaya 5A.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Бухгалтерский баланс за 2013 г.pdf') . '">' .
            Yii::t('info', 'The balance sheet for 2013 g.docx') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60 а.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Gorkogo 60 a.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет 2012 ул.Большая 12.pdf') . '">' .
            Yii::t('info', 'Report for 2012 Bolshaya 12.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет 2013 ул.Большая 12.pdf') . '">' .
            Yii::t('info', 'Report for 2013 Bolshaya 12.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Использование общего имущества.pdf') . '">' .
            Yii::t('info', 'Use of a common property.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60Б.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Gorkogo 60B.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Бухгалтерская отчетность за 2014 г.pdf') . '">' .
            Yii::t('info', 'Financial Statements for 2014.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 60В.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Gorkogo 60V.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 62 а.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Gorkogo 62 a.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Горького 62.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Gorkogo 62.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 1.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Knyazhnichnaya 1.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 3.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Knyazhnichnaya 3.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 5.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Knyazhnichnaya 5.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/Отчет за 2014 Княжничная 5А.pdf') . '">' .
            Yii::t('info', 'Report for 2014 Knyazhnichnaya 5A.pdf') . '</a></br>'
    ?>



    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60А.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Gorkogo 60A.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60Б.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Gorkogo 60V.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 60В.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Gorkogo 60V.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 62.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Gorkogo 62.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Горького 62А.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Gorkogo 62A.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 1.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Knyazhnichnaya 1.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 3.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Knyazhnichnaya 3.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 5.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Knyazhnichnaya 5.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/отчет за 2015 Княжничная 5А.pdf') . '">' .
            Yii::t('info', 'Report for 2015 Knyazhnichnaya 5A.pdf') . '</a></br>'
    ?>
    <?
    $content .= '<a href="' . Url::to('@web/files/report/БАЛАНС.pdf') . '">' .
            Yii::t('info', 'Financial Statement.pdf') . '</a></br>'
    ?>


    <?
    $content2 = '<a href="' . Url::to('@web/files/agreement/Проект договора.doc') . '" download>' .
            Yii::t('info', 'Agreement project.doc') . ' </a></br>'
    ?>
    <?
    $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД от 04.05.14 Княжничная 1.docx') . '" download>' .
            Yii::t('info', 'Agreement on 05.04.14 MKD management Knyazhnichnaya 1.docx') . ' </a></br>'
    ?>
    <?
    $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД от 30.04.14 Ул.Горького 62А.docx') . '" download>' .
            Yii::t('info', 'Contract Management from MKD 04/30/14 ul.Gorkogo 62A.docx') . ' </a></br>'
    ?>
    <?
    $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления МКД №13 от 29.03.11 Горького 60А.docx') . '" download>' .
            Yii::t('info', 'Contract MKD №13 from 29.03.11 Gorkogo 60A.docx') . ' </a></br>'
    ?>
    <?
    $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор №203 управления МКД от 01.11.11 Горького 60Б.docx') . '" download>' .
            Yii::t('info', 'Contract №203 from 01.11.11 MKD control Gorkogo 60B.docx') . ' </a></br>'
    ?>
    <?
    $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор №203 управления МКД от 01.11.11 Горького 60В.docx') . '" download>' .
            Yii::t('info', 'Contract №203 from 01.11.11 MKD control Gorkogo 60V.docx') . ' </a></br>'
    ?>
    <? $content2 .= '<a href="' . Url::to('@web/files/agreement/Договор управления Княжничная3,5,5А.docx') . '" download>"' .
            Yii::t('info', 'Contract Management Knyazhnichnaya3,5,5A.docx') . ' </a></br>'
    ?>

    <? $content3 = '<a href="' . Url::to('@web/files/price/Стоимость работ, услуг по управлению МКД Княжничная 1.doc') . '" download>' .
            Yii::t('info', 'The cost of works on the ICM management services Knyazhnichnaya 1.doc') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ (услуг) по управлению МКД Горького 62А.doc') . '" download>' .
            Yii::t('info', 'Cost of works (services) MKD management Gorkogo 62A.doc') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ, услуг по управлению МКД Горького 60А.doc') . '" download>' .
            Yii::t('info', 'The cost of works on the ICM management services Gorkogo 60A.doc.doc') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Горького 60Б.docx') . '" download>' .
            Yii::t('info', 'The cost of ICM management services Gorkogo 60B.docx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Горького 60В.docx') . '" download>' .
            Yii::t('info', 'The cost of ICM management services Gorkogo 60V.docx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Стоимость работ услуг по управлению МКД Княжничная 5А,3,5.docx') . '" download>' .
            Yii::t('info', 'The cost of ICM management services Knyazhnichnaya 5A, 3,5.docx') . ' </a></br>'
    ?>
    

<? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на эл.энергию.docx') . '" download>' .
        Yii::t('info', 'Price-fixing on el.energiyu.docx') . ' </a></br>'
?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на хол.воду.docx') . '" download>' .
            Yii::t('info', 'Price-fixing on cold water.docx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Об установлении цен на водоотведение.docx') . '" download>' .
            Yii::t('info', 'Price-fixing on water.docx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Тарифы на коммунальные услуги на 2015.docx') . '" download>"' .
            Yii::t('info', 'Tariffs on utility services 2015.docx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/Постановление Правительства Хаб.края №174-пр от 28.06.13.docx') . '" download>' .
            Yii::t('info', 'Government Decree №174-Hab.kraya forth from 28.06.13.docxx') . ' </a></br>'
    ?>
    <? $content3 .= '<a href="' . Url::to('@web/files/price/ПОСТАНОВЛЕНИЕ ПРАВИТЕЛЬСТВА ХАБАРОВСКОГО КРАЯ №388-пр от 31.10.12 (в ред. от 12.12.14).docx') . '" download>' .
            Yii::t('info', 'THE GOVERNMENT OF THE KHABAROVSK TERRITORY # 388-pr of 31.10.12 (in the red. From 12.12.14) .docx') . ' </a></br>'
    ?>

    <? $content4 = '<a href="' . Url::to('@web/files/minutes/Протокол собрания собственников Горького 62.docx') . '" download>' .
            Yii::t('info', 'Minutes of the meeting of owners Gorkogo 62.docx') . ' </a></br>'
    ?>


    <? $content4 .= '<a href="' . Url::to('@web/files/minutes/Протокол собрания 15.06.15 Княжничная 5.docx') . '" download>' .
            Yii::t('info', 'Minutes 15.06.15 ul.Knyazhnichnaya 5A.docx') . ' </a></br>'
    ?>
    <? $content4 .= '<a href="' . Url::to('@web/files/minutes/Протокол 15.06.15 ул.Княжничная 5А.docx') . '" download>' .
            Yii::t('info', 'Meeting Minutes 06/15/15 Knyazhnichnaya 5.docx') . ' </a></br>'
    ?>
    

    <? $content5 = '<a href="' . Url::to('@web/files/passports/ПАСПОРТ ОБЪЕКТОВ.xlsx') . '" download>' .
            Yii::t('info', 'HOUSES DESCRIPTION') . ' </a></br>'
    ?>


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
                'label' => Yii::t('frontend', 'More...'),
                'items' => [
                    [
                        'label' => Yii::t('frontend', 'Passports'),
                        'content' => $content5,
                    ],
                    [
                        'label' => Yii::t('frontend', 'Administrative proceedings'),
                        'content' => Yii::t('info', 'In 2013, 2014, 2015 no such events')
                    ],
                ]
            ]
        ]
    ]);
    ?>



</div>





