<?php

Route::get('', function () {
    return view('/auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/welkom', 'welkom');
Route::get('/honden', 'DogsController@index');