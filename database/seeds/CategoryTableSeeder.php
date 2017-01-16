<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->delete();

		  Category::create(array(
		    'name'=>'Video',
		    'product_id'=> 2		    
		   ));
		  Category::create(array(
		    'name'=>'Audio',
		    'product_id'=> 1		    
		   ));
		  Category::create(array(
		    'name'=>'Surveilance',
		    'product_id'=> 3		    
		   ));
		  Category::create(array(
		    'name'=>'Electrical',
		    'product_id'=> 4		    
		   ));
		  Category::create(array(
		    'name'=>'All',
		    'product_id'=> 0		    
		   ));
		  Category::create(array(
		    'name'=>'Web Development',
		    'product_id'=> 5		    
		   ));
		  Category::create(array(
		    'name'=>'Horror',
		    'product_id'=> 5		    
		   ));
		  Category::create(array(
		    'name'=>'Responsive',
		    'product_id'=> 6		    
		   ));
    }
}
