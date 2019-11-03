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

Route::redirect('/', '/compo');

// Route::get('/compo', 'PagesController@compo');

Route::resource('compo', 'composController');
Route::get('own/compo', 'ComposController@own');

Route::resource('summoner', 'SommonersComposController');


Route::post('search', ['search' => 'search', 'uses' => 'SearchController@index']);

Route::resource('user', 'UserController');
Route::get('/admin', 'UserController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
