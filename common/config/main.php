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
        'polls2' => [
            'class' => 'common\modules\polls\Module'],
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
                    'userClassName' => 'common\models\User', //change app for common
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
    'language' => 'en-En',
    'components' => [
        'languageSwitcher' => [
            'class' => 'common\components\languageSwitcher',
        ],
//        'languagepicker' => [
//            'class' => 'lajax\languagepicker\Component',
//            'languages' => ['en-En', 'ru-Ru', 'zh-Cn'], // List of available languages (icons only)
//            'cookieName' => 'language', // Name of the cookie.
//            'cookieDomain' => 'example.com', // Domain of the cookie.
//            'expireDays' => 64, // The expiration time of the cookie is 64 days.
//            'callback' => function() {
//                if (!\Yii::$app->user->isGuest) {
//                    $user = \Yii::$app->user->identity;
//                    $user->language = \Yii::$app->language;
//                    $user->save();
//                }
//            }
//        ],
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
                'about*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'info*' => [
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
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => [
                'ru' => 'ru-Ru',
                'en' => 'en-En',
                'cn' => 'zh-Cn'],
            'enableDefaultLanguageUrlCode' => true,
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
