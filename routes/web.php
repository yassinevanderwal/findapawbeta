<?php

Route::get('', function () {
    return view('/auth.login');
});
Auth::routes();

Route::get('/home', 'DogsController@index')->name('home');

Route::view('/welkom', 'welkom');
Route::get('/home', 'DogsController@index');

Route::get('/home', 'DogsController@index');
Route::get('/honden', 'DogsController@create');
Route::post('/honden', 'DogsController@store');
Route::get('/honden/{dog}', 'DogsController@show');
Route::get('/honden/{dog}/edit', 'DogsController@edit');
Route::patch('/honden/{dog}', 'DogsController@update');
Route::delete('/honden/{dog}', 'DogsController@destroy');