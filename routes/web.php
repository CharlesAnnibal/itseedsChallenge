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

Route::get('/', 'ProductController@index');
Route::get('/index', 'ProductController@index');
Route::get('/product', 'ProductController@index');
Route::get('/product-create', 'ProductController@create');
Route::get('/product-show', 'ProductController@show')->name('product-show');
Route::get('/product-update', 'ProductController@update');
Route::get('/product-delete', 'ProductController@delete');
