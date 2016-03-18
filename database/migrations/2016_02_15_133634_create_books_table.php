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
            $table->string('cover');
            $table->integer('author_id')->references('id')->on('authors');

    // 'title'=>'Requiem',
    // 'isbn'=>'9780062014535',
    // 'price'=>'13.40',
    // 'cover'=>'requiem.jpg',
    // 'author_id'=>1

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
