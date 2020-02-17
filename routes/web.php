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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'DashboardController@index')->name('home');
    Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
    Route::get('/payment', 'PaymentController@index')->name('payment');
    Route::get('/subscriptions', 'SubscriptionController@index')->name('subscriptions');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
    Route::get('/payments/create', 'PaymentController@create')->name('payments.create');
});


/*
|--------------------------------------------------------------------------
| WebController (for general top-level routes)
|--------------------------------------------------------------------------
*/
Route::get('/', 'WebController@index');


/*
|--------------------------------------------------------------------------
| UsersController
|--------------------------------------------------------------------------
*/
Route::get('/dashboard/{user}', 'UsersController@show');
Route::put('/dashboard/{user}', 'UsersController@update');
Route::delete('/dashboard/{user}', 'UsersController@destroy');

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

    Route::get('/admin/dashboard', 'UsersController@index')->name('admin.dashboard');
    Route::get('/admin/dashboard/create', 'UsersController@create');
    Route::post('admin/dashboard', 'UsersController@store');
    Route::get('/admin/dashboard/{user}/edit', 'UsersController@edit')->name('dashboard.edit');
    Route::put('/admin/dashboard/{user}', 'UsersController@update')->name('dashboard.update');

    Route::get('/admin/categories', 'CategoriesController@index')->name('admin.categories');
    Route::get('/admin/categories/create', 'CategoriesController@create')->name('categories.create');
    Route::post('admin/categories', 'CategoriesController@store')->name('categories.store');
    Route::get('/admin/categories/{category}/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::delete('/categories/{category}', 'CategoriesController@destroy')->name('categories.delete');
    Route::put('/categories/{category}', 'CategoriesController@update')->name('categories.update');
});
