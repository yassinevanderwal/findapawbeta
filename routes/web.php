<?php

Route::get('', function () {
    return view('/welkom');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/welkom', 'welkom');
Route::get('/honden', 'DogsController@index');

Route::get('/honden', 'DogsController@index');
Route::get('/honden/create', 'DogsController@create');
Route::post('/honden', 'DogsController@store');
Route::get('/honden/{dog}', 'DogsController@show');
Route::get('/honden/{dog}/edit', 'DogsController@edit');
Route::patch('/honden/{dog}', 'DogsController@update');
Route::delete('/honden/{dog}', 'DogsController@destroy');