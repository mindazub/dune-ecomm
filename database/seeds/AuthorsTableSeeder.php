<?php

use App\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
	DB::table('authors')->delete();

	        Author::create(array(
	            'name' => 'Lauren',
	            'surname'=>'Oliver',
	            'email'=>'lauren.oliver@gmail.com'
	        ));

	        Author::create(array(
	            'name' => 'Stephenie',
	            'surname'=>'Meyer',
	            'email'=>'stephenie.meyer@gmail.com'
	        ));

	        Author::create(array(
	            'name' => 'Dan',
	            'surname'=>'Brown',
	            'email'=>'dan.brown@gmail.com'
	        ));

	        Author::create(array(
	            'name' => 'Matt',
	            'surname'=>'Stauffer',
	            'email'=>'matt.stauffer@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Taylor',
	            'surname'=>'Otwell',
	            'email'=>'taylor.otwell@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Brendon',
	            'surname'=>'Falkowski',
	            'email'=>'brandon.falkowski@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Bradley',
	            'surname'=>'Stauffer',
	            'email'=>'matt.stauffer@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Maddie',
	            'surname'=>'Otwell',
	            'email'=>'taylor.otwell@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Tom',
	            'surname'=>'Falkowski',
	            'email'=>'brandon.falkowski@gmail.com'
	        ));
	        Author::create(array(
	            'name' => 'Bryan',
	            'surname'=>'Adren',
	            'email'=>'bry.aldr@gmail.com'
	        ));	  	  
	}	 
	
}
