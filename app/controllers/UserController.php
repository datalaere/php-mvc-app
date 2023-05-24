<?php

use MVC\Controller;

use App\Models\User;
use MVC\View;

class UserController extends Controller
{
    public function index($name = '')
    {
       return View::render('user/index', ['name' => $name]);
    }

    public function create()
    {
        return User::create([
            'username' => 'thom855j'
        ]);
    }

    public function store()
    {
        User::create([
            'username' => 'thom855j'
        ]);
    }

    public function show($id ='')
    {
        echo $id;
    }

    public function edit($id)
    {
        echo $id;
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

}