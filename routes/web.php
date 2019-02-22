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

Route::get('products', 'ProductViewController@index')->name('products');

Route::get('add_product', 'ProductViewController@add')->name('add');

Route::post('charge_file', 'ProductController@chargeFile')->name('charge');

