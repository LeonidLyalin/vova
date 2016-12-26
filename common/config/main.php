<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    /**
     * http://www.open-open.com/lib/view/open1434638805348.html
     * Yii2-admin RBAC权限管理的实现
     */
    'aliases' => [
        '@mdm/admin' => '$PATH\yii2-admin-1.0.3',
    ],
    'modules' => [
        'polls2'=>[
            'class'=>'common\modules\polls\Module'],
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '@webroot/common/image',
            'uploadUrl' => '@web/common/image',
            'imageAllowExtensions' => ['jpg', 'png', 'gif']
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu', // it can be '@path/to/your/layout'.  
            /**/
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'common\models\User',//change app for common
                    'idField' => 'id',
                ]
            ],
            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access' // change label  
                ],
            //'route' => null, // disable menu route  
            ],
        ]
    ],
    'language' => 'zh-Cn',
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'f.gvozd',
                'password' => 'fedorgvozd',
                'port' => '587',
                'encryption' => 'tls',
            ],],
        
        'i18n' => [
            'translations' => [
                'sourceLanguage' => 'en-En',

                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    
                ],
                'home*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    //'basePath' => '@common/messages',
                ],
            ],
            
            
            
            
        ],
//        'formatter' => [
//            'class' => 'yii\i18n\Formatter',
//            'dateFormat' => 'php:d.m.Y',
//            'datetimeFormat' => 'php:j F, H:i',
//            'timeFormat' => 'php:H:i:s',
//            'defaultTimeZone' => 'Europe/Moscow',
//            'locale' => 'ru-RU'
//        ],
        /**
         * http://www.open-open.com/lib/view/open1434638805348.html
         * Yii2-admin RBAC权限管理的实现
         */
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'authManager' => [
//            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
//        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'  
            'defaultRoles' => ['guest'],
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
           // 'rules' => ['<alias:\w+>' => 'site/<alias>',
            ],
        
    ],
//    'as access' => [
//        'class' => 'mdm\admin\components\AccessControl',
//        'allowActions' => [
//            'site/*',
//            'admin/*',
//            'polls/*',
//            'polls-answers/*',
//            'debug/*',
//            'house/*'
//            
//        ]
//    ],
];
