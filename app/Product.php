<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = array('category','brand','model','description', 'category_id');

	public function category(){
	     return $this->belongsTo('Category');
    }
}
