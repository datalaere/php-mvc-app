<?php

namespace MVC;

use MVC\Helpers\Config;

class View
{
    protected static $views;

    public static function render($filename, $data = [])
    {
        $data = (object) $data;
        self::$views = Config::get('app.views');

        if(file_exists(self::$views . $filename . '.php')) {
            require_once self::$views . $filename . '.php';
        }
       
    }
}