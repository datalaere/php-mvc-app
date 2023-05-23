<?php

use MVC\Helpers\Config;
use Illuminate\Database\Capsule\Manager as Capsule;

define('ABSPATH', dirname(__DIR__));

ini_set('display_errors', true);

require_once ABSPATH . '/vendor/autoload.php';
require_once 'src/App.php';
require_once 'src/Controller.php';

Config::load(ABSPATH . '/app/config.php');

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => Config::get('db.driver'),
    'host' => Config::get('db.host'),
    'username' => Config::get('db.username'),
    'password' => Config::get('db.password'),
    'database' => Config::get('db.database'),
    'charset' => Config::get('db.charset'),
    'collation' => Config::get('db.collation'),
    'prefix' => Config::get('db.prefix')
]);

$capsule->bootEloquent();

// $capsule->setAsGlobal();
