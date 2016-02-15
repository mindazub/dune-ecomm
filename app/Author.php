<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
protected $table = 'authors';

protected $fillable = array('name','surname');

}