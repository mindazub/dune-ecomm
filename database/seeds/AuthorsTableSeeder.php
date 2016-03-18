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

	}	 
	
}
