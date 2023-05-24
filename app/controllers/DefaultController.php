<?php

use MVC\Controller;
use MVC\View;

use App\Models\User;

class DefaultController extends Controller
{
    /**
     * Default GET index
     */
    public function index()
    {
        return View::render('default/index');
    }

    /**
     * GET page for creating new data
     */
    public function create()
    {

    }

    /**
     * POST page for saving new data
     */
    public function store()
    {
      
    }

    /**
     * GET for view one specific data 
     */
    public function show($id ='')
    {
        echo $id;
    }

    /**
     * GET for editing one specific data
     */
    public function edit($id)
    {
        echo $id;
    }

    /**
     * POST for updating one specific data
     */
    public function update($id)
    {
        echo $id;
    }

    /**
     * POST for deleting one specific data
     */
    public function destroy($id)
    {
        echo $id;
    }


}