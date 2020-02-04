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
Route::get('/admin', 'WebController@admin')->middleware('auth'); // needs to be gated


/*
|--------------------------------------------------------------------------
| UsersController
|--------------------------------------------------------------------------
*/

Route::get('/admin/users', 'UsersController@index')->name('admin.users');
Route::get('/admin/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::post('admin/users', 'UsersController@store');
Route::get('/admin/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');


/*
|--------------------------------------------------------------------------
| ProductsController
|--------------------------------------------------------------------------
*/

Route::get('/products', 'ProductsController@index');
Route::get('/admin/products', 'ProductsController@admin')->name('admin.products');
Route::get('/admin/products/create', 'ProductsController@create')->name('products.create');
Route::get('/products/{product}', 'ProductsController@show')->name('products.show');
Route::post('admin/products', 'ProductsController@store');
Route::get('/admin/products/{product}/edit', 'ProductsController@edit')->name('products.edit');
Route::put('/products/{product}', 'ProductsController@update');
Route::delete('/products/{product}', 'ProductsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
