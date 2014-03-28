<?php
// Uncomment to enable debug mode. Recommended for development.
//define('YII_DEBUG', true);

// Uncomment to enable dev environment. Recommended for development
//define('YII_ENV', 'dev');

return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=mydb',
            'username' => 'myuser',
            'password' => 'mysecret',
        ],
    ],
];
