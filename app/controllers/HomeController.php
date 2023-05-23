<?php

use MVC\Controller;

use MVC\Models\User;

class HomeController extends Controller
{
    public function index($name = '')
    {
        $this->view('home/index');
    }

    public function create()
    {
        User::create([]);
    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

    public function delete()
    {
        
    }
}