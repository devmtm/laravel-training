<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');

//Route::get('products', 'ProductController@index');
//Route::get('products/{id}/edit', 'ProductController@edit');
//Route::get('products/{id}', 'ProductController@show');
//Route::delete('products/{id}', 'ProductController@destroy');
//Route::post('products', 'ProductController@store');
