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

Route::get('/', 'IndexController@index')->name('index');
Route::resource('product', 'ProductController');
Route::post('cart', 'CartController@store')->name('cart');
Route::resource('cart', 'CartController');
Route::get('empty', function () {
    Cart::destroy();
});
