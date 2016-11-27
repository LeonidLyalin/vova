<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'ru-Ru',
    'components' => [
        'i18n' => [
            
            'translations' => [
                'sourceLanguage'=>'ru-Ru',
//                'frontend*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@common/messages',
//                ],
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],     
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
