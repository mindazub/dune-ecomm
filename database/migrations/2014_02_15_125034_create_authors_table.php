<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // DB::table('authors')->truncate();
        // DB::table('authors')->delete();

        Schema::create('authors', function (Blueprint $table) {
            
              $table->increments('id');
              $table->string('name');
              $table->string('surname');
              $table->string('email');
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
        Schema::drop('authors');
    }
}
