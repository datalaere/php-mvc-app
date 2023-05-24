<?php

use MVC\Controller;
use MVC\View;

class HomeController extends Controller
{
    public function index()
    {
        return View::render('default/index');
    }

}