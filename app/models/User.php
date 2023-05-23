<?php

namespace MVC\Models;

use MVC\Model;

class User extends Model
{
    protected $fillable = ['username', 'password'];
    
    public $name;

    public function create($table)
    {

    }

    public function read($where)
    {

    }

    public function update($table, $where)
    {

    }

    public function delete($where)
    {
        
    }
}