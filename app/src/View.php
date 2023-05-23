<?php

namespace MVC;

use MVC\Helpers\Config;

class View
{
    protected static $views = Config::get('app.views');
    public static function render($filename, $data = [])
    {
        require_once self::$views . $filename . '.php';
    }
}