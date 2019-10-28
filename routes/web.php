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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/json', 'PagesController@json');

Route::get('/compo', 'PagesController@compo');

Route::resource('compo', 'composController');

Route::post('summoner/{id}', 'SommonersComposController@store');

// Route::post('/compo', 'composController@store');
// Route::get('/compo/create', 'PagesController@create');

// Route::get('/', function () {
//     $tasks = [
//         'hoi',
//         'dag',
//         'doei'
//     ];
//     return view('welcome', [
//         'tasks' => $tasks,
//         'title' => request('title')

//         ]);
// });


// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/about', function () {
//     return view('about');
// });

