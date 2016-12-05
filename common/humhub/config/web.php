<?php

$config = [
    'id' => 'humhub',
    'bootstrap' => ['common\humhub\components\bootstrap\LanguageSelector'],
    'defaultRoute' => '/dashboard/dashboard',
    'layoutPath' => '@humhub/views/layouts',
    'components' => [
        'request' => [
            'class' => 'common\humhub\components\Request',
        ],
        'user' => [
            'class' => 'common\humhub\modules\user\components\User',
            'identityClass' => 'common\humhub\modules\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/user/auth/login']
        ],
        'errorHandler' => [
            'errorAction' => 'error/index',
        ],
        'session' => [
            'class' => 'common\humhub\modules\user\components\Session',
            'sessionTable' => 'user_http_session',
        ],
    ],
    'modules' => [],
];

return $config;
