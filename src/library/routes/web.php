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

// Routes in relation with book element
Route::get('/', 'AccueilController@index');
Route::get('/liste','ListeController@index');
Route::get('/addBook','ListeController@addBook');
Route::post('/insert/book','ListeController@insertBook');
Route::post('/delete/book','ListeController@deleteBook');
Route::post('/update/book','ListeController@updateBook');
Route::post('/update/book/action','ListeController@updateBookAction');

// Routes in relation with author element
Route::get('/add/author', 'AuthorsController@addAuthor');
Route::post('/insert/author','AuthorsController@insertAuthor');

// Routes in relation with user element
route::get('/messages', 'MessagesController@index');
route::get('/write/message', 'MessagesController@writeMessage');
route::post('/send/message', 'MessagesController@sendMessage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
