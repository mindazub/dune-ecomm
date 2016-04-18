<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', 'HomeController@index');
    Route::get('/books', 'HomeController@books');

	Route::post('/books', 'HomeController@store');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/shop', 'ShopController@index');
    Route::get('/shop/book/{id}', 'ShopController@show');
    Route::get('/shop/book/{id}/edit', 'ShopController@edit');
    Route::post('/shop/book/update', [	
    	'as'=>'books.update',
    	'uses'=>'ShopController@update'
    ]);
});
