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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'CheckOutController@checkout')->name('checkout');
Route::get('/view_checkout/{product_id}/{product_quantity}', 'CheckOutController@view_checkout')->name('view_checkout');
//Route::get('/view_checkout', 'CheckOutController@view_checkout')->name('view_checkout');
Route::get('/order', 'HomeController@order')->name('home');
