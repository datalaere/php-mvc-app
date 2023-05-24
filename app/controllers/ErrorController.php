<?php

use MVC\Controller;
use MVC\View;

class ErrorController extends Controller
{
    public function index() 
    {
        return View::render('error/404');
    }

    public function show($id) 
    {
        return View::render("error/{$id}");
    }

}