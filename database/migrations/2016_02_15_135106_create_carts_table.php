<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('member_id');
              $table->integer('book_id');
              $table->integer('amount');
              $table->decimal('total', 10, 2);
              $table->timestamps();
            // $table->increments('id');
            // 'member_id','book_id','amount','total'
            // $table->integer('member_id')->references('id')->on('users');
            // $table->integer('book_id')->references('id')->on('books');
            // $table->integer('amount');
            // $table->float('total');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carts');
    }
}
