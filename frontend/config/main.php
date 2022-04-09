<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language'   => 'uz',
    'sourceLanguage' => 'uz_GB',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
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
        'i18n' => [
            'translations' => [
               'app*' => [
                   'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
            ],
          ],
        ],
        
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => 'aboutUs',
                    'route' => 'site/aboutus',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'course',
                    'route' => 'site/course',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'error',
                    'route' => 'site/error',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'events',
                    'route' => 'site/event',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'main',
                    'route' => 'site/index',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'teacher',
                    'route' => 'site/teacher',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'view',
                    'route' => 'site/view',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'contact',
                    'route' => 'site/contact',
                    'suffix' => '',
                ],
                [
                    'pattern' => 'result',
                    'route' => 'site/search',
                    'suffix' => '',
                ], 
                [
                    'pattern' => 'success',
                    'route' => 'site/view',
                    'suffix' => '',
                ],
            ],
        ],
    ],
    'params' => $params,
];
