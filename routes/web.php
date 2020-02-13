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


Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
Route::get('/payment', 'HomeController@payment')->name('payment')->middleware('auth');
Route::get('/subscriptions', 'HomeController@subscriptions')->name('subscriptions')->middleware('auth');

/*
|--------------------------------------------------------------------------
| WebController (for general top-level routes)
|--------------------------------------------------------------------------
*/
Route::get('/', 'WebController@index');
Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| UsersController
|--------------------------------------------------------------------------
*/
Route::get('/users/{user}', 'UsersController@show');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');

/*
|--------------------------------------------------------------------------
| public Products
|--------------------------------------------------------------------------
*/
Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}', 'ProductsController@show')->name('products.show');


/*
|-------------------------------------------------------------------------------
| Auth middleware group
|-------------------------------------------------------------------------------
*/
Auth::routes();
Route::middleware('can:access admin')->group(function () {
    Route::get('/admin', 'WebController@admin');

    Route::get('/admin/products', 'ProductsController@admin')->name('admin.products');
    Route::get('/admin/products/create', 'ProductsController@create')->name('products.create');
    Route::post('admin/products', 'ProductsController@store');
    Route::get('/admin/products/{product}/edit', 'ProductsController@edit')->name('products.edit');
    Route::put('/products/{product}', 'ProductsController@update');
    Route::delete('/products/{product}', 'ProductsController@destroy');

    Route::get('/admin/users', 'UsersController@index')->name('admin.users');
    Route::get('/admin/users/create', 'UsersController@create');
    Route::post('admin/users', 'UsersController@store');
    Route::get('/admin/users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('/admin/users/{user}', 'UsersController@update')->name('users.update');

    Route::get('/admin/categories', 'CategoriesController@index')->name('admin.categories');
    Route::get('/admin/categories/create', 'CategoriesController@create')->name('categories.create');
    Route::post('admin/categories', 'CategoriesController@store')->name('categories.store');
    Route::get('/admin/categories/{category}/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::delete('/categories/{category}', 'CategoriesController@destroy')->name('categories.delete');
    Route::put('/categories/{category}', 'CategoriesController@update')->name('categories.update');
});
