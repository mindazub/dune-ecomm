<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('isbn');
            $table->float('price');
            $table->float('your_price');
            $table->string('cover')->nullable();
            $table->integer('author_id')->references('id')->on('authors');
            $table->integer('category_id')->references('id')->on('categories');

    // 'title'=>'Requiem',
    // 'isbn'=>'9780062014535',
    // 'price'=>'13.40',
    // 'cover'=>'requiem.jpg',
    // 'author_id'=>1
    // REIKIA IR CATEGORY
    // $table->string('category_id');
    // $table create_categories_table, kur id, name, book_id, 

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
