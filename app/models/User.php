<?php

namespace App\Models;

use MVC\Model;

class User extends Model
{
    protected $fillable = ['username', 'password'];
    
    public $name;

}