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
Route::get('/login', function () {
    return view('login');
});

Route::get('/services', 'pagesControllers@services');
Route::get('/about','pagesControllers@about');
Route::get('/Club','Clubcontroller@vClub');
Route::post('/Club','Clubcontroller@post');
Route::get('/admin','admincontroller@showad');

Auth::routes();
/*
Route::get('/admin', function(){
	echo "Hello Admin";
})->middleware('admin');
/*
Route::get('/Club', function(){
	echo "Hello Club";
})->middleware('Club');
*/



Route::get('/books', 'booksController@test1')->name('books');
//Route::post('/books', 'booksController@takehimto');

Route::get('/createbooks', 'createbooksController@create');
Route::post('/createbooks', 'createbooksController@store');
//Route::get('/books', 'booksController@index')->name('books');
