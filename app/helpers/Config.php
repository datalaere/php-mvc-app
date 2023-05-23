<?php

namespace MVC\Helpers;

class Config
{
    protected static $data;

    protected static $default;

    public static function load($file)
    {
        self::$data = require $file;
    }

    public static function get($key, $default = null)
    {
        self::$default = $default;

        $segments = explode('.', $key);
        $data = self::$data;

        foreach($segments as $segment) {
            if(isset($data[$segment])) {
                $data = $data[$segment];
            } else {
                $data = self::$default;
                break;
            }
        }

        return $data;
    }
}