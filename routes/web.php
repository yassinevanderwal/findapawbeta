<?php
Route::get('', function () {
    return view('/auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/welkom', 'welkom');
<<<<<<< HEAD
Route::get('/home', 'DogsController@index');

Route::get('/home', 'DogsController@index');
=======
Route::get('/home', 'HomeController@index');
Route::get('/honden', 'DogsController@index');
>>>>>>> aebd1510057b44ba6e79f1d5c5876a7790e61cc4
Route::get('/honden', 'DogsController@create');
Route::post('/honden', 'DogsController@store');
Route::get('/honden/{dog}', 'DogsController@show');
Route::get('/honden/{dog}/edit', 'DogsController@edit');
Route::patch('/honden/{dog}', 'DogsController@update');
Route::delete('/honden/{dog}', 'DogsController@destroy');