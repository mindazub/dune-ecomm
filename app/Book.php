<?php

namespace App;

use App\Author;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

	protected $fillable = array('title','isbn','cover','price', 'your_price', 'author_id');

	public function author(){
		return $this->belongsTo('App\Author', 'id');
    }
    public function category(){
		return $this->belongsTo('App\Category', 'id');
    }


}
