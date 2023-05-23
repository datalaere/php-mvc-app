<?php

return [
    'app' => [
        'path' => ABSPATH,
        'views' => ABSPATH . '/app/views',
        'url' => ''
    ],
    'db' => [
        'host' => '127.0.0.1',
        'driver' => 'mysql',
        'database' => '',
        'username' => 'root',
        'password' => 'mysql',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],
    'mail' => [
        'host' => 'smtp.mail.com'
    ]
];