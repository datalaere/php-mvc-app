<?php

namespace MVC;

use MVC\Interfaces\ControllerInterface;
use MVC\View;

abstract class Controller implements ControllerInterface 
{
    protected $models = '../app/models/';

    protected function model($model)
    {
        require_once $this->models . $model . '.php';
        return new $model;
    }

    protected function view($filename = '', $data = [])
    {
        return View::render($filename = '', $data = []);
    }
}