<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::table('users')->delete();
        // DB::table('users')->truncate();

        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password', 60);
            // $table->rememberToken();
            // $table->timestamps();

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('admin');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
