<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
    'vote' => [
      'class' => hauntd\vote\Module::class,
        'guestTimeLimit' => 3600,
        'entities' => [
          // Entity -> Settings
          'itemVote' => app\models\Item::class, // your model
          'itemVoteGuests' => [
              'modelName' => app\models\Item::class, // your model
              'allowGuests' => true,
          ],
          'itemLike' => [
              'modelName' => app\models\Item::class, // your model
              'type' => hauntd\vote\Module::TYPE_TOGGLE, // like/favorite button
          ],
          'itemFavorite' => [
              'modelName' => app\models\Item::class, // your model
              'type' => hauntd\vote\Module::TYPE_TOGGLE, // like/favorite button
          ],
      ],
    ],
  ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        
    'assetManager' => [
        'bundles' => [
            'dosamigos\google\maps\MapAsset' => [
                'options' => [
                    'key' => 'AIzaSyA44qDfpv4Qw3affwiOAAhKOtcu7Duqfko',
                    'language' => 'ru-Ru',
                    'version' => '3.1.18'
                ]
            ]
        ]
    ],

        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                    [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    /*
      'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [
      ],
      ],
     */
    ],
    'params' => $params,
];
