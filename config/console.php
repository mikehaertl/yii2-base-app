<?php
// Merged web + local configuration is available in $web
return [
    'id' => $web['id'],
    'basePath' => $web['basePath'],
    'preload' => ['log'],
    'controllerNamespace' => 'app\commands',
    'extensions' => $web['extensions'],
    'components' => [
        'db' => $web['components']['db'],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $web['params'],
];
