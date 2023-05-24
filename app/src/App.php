<?php

namespace MVC;

class App 
{

    protected $default = 'Default';
    protected $controller;
    protected $error = 'Error';
    protected $method = 'index';
    protected $id = 'show';
    protected $params = [];
    protected $url = 'url';
    protected $path = '../app/controllers/';

    public function __construct()
    {
        $this->url = $this->parseUrl();

        if(empty($this->url[0])) {
            $this->url[0] = $this->default;
        }

        if(empty($this->url[1])) {
            $this->url[1] = $this->method;
        } 

        if(is_numeric($this->url[1])) {
            $this->url[3] = $this->url[1];
            $this->url[1] = $this->id;
        } 
        
        if(file_exists($this->path .  ucfirst($this->url[0]) . 'Controller.php')) {
            $this->controller = $this->url[0] . 'Controller';
            unset($this->url[0]);
        } else {
            $this->controller = ucfirst($this->error) . 'Controller';
        }

        require_once $this->path . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($this->url[1]) && method_exists($this->controller, $this->url[1])) {
            $this->method = $this->url[1];
            unset($this->url[1]);
        } else {
            require_once $this->path . ucfirst($this->error) . 'Controller.php';

            $this->controller = ucfirst($this->error) . 'Controller';

            $this->controller = new $this->controller;
        }

        $this->params = $this->url ? array_values($this->url) : [];

        return call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl()
    {
        if(isset($_GET[$this->url])) {
            return explode('/', filter_var(rtrim($_GET[$this->url], '/'), FILTER_SANITIZE_URL));
        }
    }
}