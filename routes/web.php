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

// Route::get('/', function () {
//     return view('pages.show-post');
// });
//

Route::get('/', 'PostController@index');

Route::resource('post', 'PostController');

// Route::get('post/{id}', 'PostController@show');

Route::resource('category', 'CategoryController');
