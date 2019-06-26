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
// Promeniti u Blank!!!!//
//////////////////////////////////
Route::get('/', 'ArticlesController@blankPage')->name('blank_page');
///////////////////////////////////////

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
Route::get('/articles/{article}/{slug}', 'ArticlesController@show')->name('show');
Route::get('/articles-by/{user}/{author}', 'ArticlesController@articlesByAuthor')->name('articles_by_author');

/// Api Routes ///
Route::get('/api/list-articles', 'Api\ApiController@index')->name('api_list_articles');
Route::get('/api/create', 'Api\ApiController@create')->name('api_create');
Route::post('/api/store', 'Api\ApiController@store')->name('api_store');