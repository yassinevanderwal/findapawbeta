<?php
<<<<<<< HEAD
Route::get('', function () {
    return view('/auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/welkom', 'welkom');

Route::get('/home', 'HomeController@index');
Route::get('/honden', 'DogsController@index');

Route::get('/honden', 'DogsController@create');
=======

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


Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/honden', 'dogs');

Route::view('/contact', 'contact');

Route::get('/honden', 'DogsController@index');
Route::get('/honden/create', 'DogsController@create');
>>>>>>> parent of b8e7de5... Merge branch 'master' of https://github.com/yassinevanderwal/findapawbeta
Route::post('/honden', 'DogsController@store');
Route::get('/honden/{dog}', 'DogsController@show');
Route::get('/honden/{dog}/edit', 'DogsController@edit');
Route::patch('/honden/{dog}', 'DogsController@update');
Route::delete('/honden/{dog}', 'DogsController@destroy');