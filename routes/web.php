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

Route::get('/', 'ArticlesController@index')->name('home'); 

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/// Custom routes ///
Route::get('/home', 'ArticlesController@index')->name('home'); // Lists all the articles
Route::get('/create', 'ArticlesController@create')->name('create');
Route::post('/store', 'ArticlesController@store')->name('store');

Route::get('/admin', 'ArticlesController@admin')->name('admin');
Route::get('/delete/{article}', 'ArticlesController@delete')->name('delete');
Route::get('/edit/{article}', 'ArticlesController@edit')->name('edit');
Route::post('/update/{article}', 'ArticlesController@update')->name('update');