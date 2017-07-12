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
Route::get('/', 'AccueilController@index');
Route::get('/liste','ListeController@index');
Route::get('/addBook','ListeController@addBook');

Route::post('/insert/book','ListeController@insertBook');
Route::post('/delete/book','ListeController@deleteBook');
Route::post('/update/book','ListeController@updateBook');
Route::post('/update/book/action','ListeController@updateBookAction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
