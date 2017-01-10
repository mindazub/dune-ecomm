<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product()
    {
    	return $this->hasMany('Product','category_id');
    }
    public function book(){
		return $this->hasMany('App\Book', 'id');
    }
}
