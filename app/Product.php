<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = array('category','brand','model','description');

	public function category(){
	     return $this->belongsTo('Category');
    }
}
