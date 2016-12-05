<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

return [
    'id' => 'humhub-console',
    'controllerNamespace' => 'common\humhub\commands',
    'components' => [
        'user' => [
            'class' => 'common\humhub\modules\user\components\User',
            'identityClass' => 'common\humhub\modules\user\models\User',
            'enableAutoLogin' => false,
            'enableSession' => false,
            'loginUrl' => ['/user/auth/login']
        ],
    ],
];
