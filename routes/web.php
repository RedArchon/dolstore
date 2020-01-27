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
| WebController
|--------------------------------------------------------------------------
*/

Route::get('/', 'WebController@index');

/*
|--------------------------------------------------------------------------
| AdminController
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'AdminController@index');
Route::get('/admin/products', 'AdminController@products');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/orders', 'AdminController@orders');

/*
|--------------------------------------------------------------------------
| ProductsController
|--------------------------------------------------------------------------
*/

Route::get('/products', 'ProductsController@index');
Route::get('/admin/products/create', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('admin/products', 'ProductsController@store');
Route::get('/admin/products/{product}/edit', 'ProductsController@edit');
Route::put('/products/{product}', 'ProductsController@update');
Route::delete('/products/{product}', 'ProductsController@destroy');
