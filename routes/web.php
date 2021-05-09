<?php


Route::get('/', 'MascarillasController@index');
Route::post('/Agregar', 'MascarillasController@store')->name('AgregarMascarilla');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
