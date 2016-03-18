<?php

namespace App;

use App\Book;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
	protected $table = 'authors';

	protected $fillable = array('name','surname', 'email', 'book_id');

	public function books(){
		return $this->hasMany('App\Book', 'id');
    }

}