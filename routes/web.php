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

/*
|--------------------------------------------------------------------------
| WebController (for general top-level routes)
|--------------------------------------------------------------------------
*/

Route::get('/', 'WebController@index');
Route::get('/admin', 'WebController@admin'); // needs to be gated


/*
|--------------------------------------------------------------------------
| UsersController
|--------------------------------------------------------------------------
*/

Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::post('admin/users', 'UsersController@store');
Route::get('/admin/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');


/*
|--------------------------------------------------------------------------
| ProductsController
|--------------------------------------------------------------------------
*/

Route::get('/products', 'ProductsController@index');
Route::get('/admin/products', 'ProductsController@admin');
Route::get('/admin/products/create', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('admin/products', 'ProductsController@store');
Route::get('/admin/products/{product}/edit', 'ProductsController@edit');
Route::put('/products/{product}', 'ProductsController@update');
Route::delete('/products/{product}', 'ProductsController@destroy');
