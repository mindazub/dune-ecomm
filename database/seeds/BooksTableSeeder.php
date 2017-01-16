<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	  {
		  DB::table('books')->delete();

		  Book::create(array(
		    'title'=>'Requiem',
		    'isbn'=>'9780062014535',
		    'price'=>'13.40',
		    'your_price'=>'6.99',
		    'cover'=>'requiem.jpg',
		    'author_id'=>1,
		    'category_id'=>1
		   ));
		  Book::create(array(
		    'title'=>'Twilight',
		    'isbn'=>'9780316015844',
		    'price'=>'15.40',
		    'your_price'=>'6.99',
		    'cover'=>'twilight.jpg',
		    'author_id'=>2,
		    'category_id'=>2
		  ));
		  Book::create(array(
		    'title'=>'Deception Point',
		    'isbn'=>'9780671027384',
		    'price'=>'16.40',
		    'your_price'=>'6.99',
		    'cover'=>'deception.jpg',
		    'author_id'=>3,
		    'category_id'=>3
		  ));
		  Book::create(array(
		    'title'=>'Laravel Up and Running',
		    'isbn'=>'9780671027384',
		    'price'=>'26.40',
		    'your_price'=>'16.99',
		    'cover'=>'deception.jpg',
		    'author_id'=>3,
		    'category_id'=>3
		  ));
		  Book::create(array(
		    'title'=>'Unit Testing',
		    'isbn'=>'9780671027384',
		    'price'=>'16.40',
		    'your_price'=>'8.99',
		    'cover'=>'deception.jpg',
		    'author_id'=>3,
		    'category_id'=>3
		  ));
		  Book::create(array(
		    'title'=>'101 Unit Testing',
		    'isbn'=>'9780671027384',
		    'price'=>'26.40',
		    'your_price'=>'18.99',
		    'cover'=>'deception.jpg',
		    'author_id'=>2,
		    'category_id'=>2
		  ));
		  // Book::create(array(
		  //   'title'=>'Laravel Up and Running',
		  //   'isbn'=>'9780671027384',
		  //   'price'=>'26.40',
		  //   'your_price'=>'16.99',
		  //   'cover'=>'deception.jpg',
		  //   'author_id'=>3,
		  //   'category_id'=>3
		  // ));
		  // Book::create(array(
		  //   'title'=>'Unit Testing',
		  //   'isbn'=>'9780671027384',
		  //   'price'=>'16.40',
		  //   'your_price'=>'8.99',
		  //   'cover'=>'deception.jpg',
		  //   'author_id'=>3,
		  //   'category_id'=>3
		  // ));
		  // Book::create(array(
		  //   'title'=>'101 Unit Testing',
		  //   'isbn'=>'9780671027384',
		  //   'price'=>'26.40',
		  //   'your_price'=>'18.99',
		  //   'cover'=>'deception.jpg',
		  //   'author_id'=>3,
		  //   'category_id'=>3
		  // ));		  		  
	  }
}
