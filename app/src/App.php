<?php

namespace MVC;

class App 
{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    protected $url = 'url';
    protected $path = '../app/controllers/';

    public function __construct()
    {
        $this->url = $this->parseUrl();

        if(!isset($this->url[0])) {
            $this->url[0] = $this->controller;
        } elseif(!isset($this->url[1])) {
            $this->url[1] = $this->method;
        }
        
        if(file_exists($this->path .  ucfirst($this->url[0]) . 'Controller.php')) {
            $this->controller = $this->url[0];
            unset($this->url[0]);
        } else {
            $this->controller = $this->controller . 'Controller';
        }

        require_once $this->path . $this->controller . 'Controller.php';

        $this->controller = new $this->controller . 'Controller';

        if(method_exists($this->controller, $this->url[1])) {
            $this->method = $this->url[1];
            unset($this->url[1]);
        }

        $this->params = $this->url ? array_values($this->url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl()
    {
        if(isset($_GET[$this->url])) {
            return explode('/', filter_var(rtrim($_GET[$this->url], '/'), FILTER_SANITIZE_URL));
        }
    }
}