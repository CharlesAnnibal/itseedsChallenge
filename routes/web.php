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
Route::get('/product', 'ProductController@index')->name('index');
Route::get('/create', 'ProductController@create')->name('create');
Route::get('/show/{id}', 'ProductController@show')->name('show');
Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
Route::get('/delete/{id}', 'ProductController@delete')->name('delete');
Route::get('/destroy/{id}', 'ProductController@destroy')->name('destroy');

Route::post('/update-submit/{id}', 'ProductController@save')->name('update-submit');
Route::post('/create-submit', 'ProductController@insert')->name('create-submit');


