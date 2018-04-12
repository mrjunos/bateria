<?php

// INICIO
Route::get('/', 'HomeController@start')->name('start');
Route::get('/user/{usuario}', 'HomeController@index')->name('index');

// INTRALABORAL FORMA A
Route::post('frpifa/user/{user}', 'FrpifaController@store')->name('frpifa.store');
Route::get('frpifa/user/{user}/edit/{frpifa}/{s}', 'FrpifaController@edit')->name('frpifa.edit');
Route::put('frpifa/user/{user}/update/{frpifa}/{s}', 'FrpifaController@update')->name('frpifa.update');
Route::get('frpifa/user/{user}/calculos/{frpifa}', 'FrpifaController@calculos')->name('frpifa.calculos');
Route::get('calculos/user{user}/frpifa', 'FrpifaController@calcularTodo')->name('frpifa.calcularTodo');

// INTRALABORAL FORMA B
Route::get('frpifb/user/{user}', 'FrpifbController@index')->name('frpifb.index');
Route::post('frpifb/user/{user}', 'FrpifbController@store')->name('frpifb.store');
Route::get('frpifb/user/{user}/edit/{frpifb}/{s}', 'FrpifbController@edit')->name('frpifb.edit');
Route::put('frpifb/user/{user}/update/{frpifb}/{s}', 'FrpifbController@update')->name('frpifb.update');
Route::get('frpifb/user/{user}/calculos/{frpifb}', 'FrpifbController@calculos')->name('frpifb.calculos');
Route::get('calculos/user/{user}/frpifb', 'FrpifbController@calcularTodo')->name('frpifb.calcularTodo');

// EXTRALABORAL
Route::get('frpe/user/{user}', 'FrpeController@index')->name('frpe.index');
Route::post('frpe/user/{user}', 'FrpeController@store')->name('frpe.store');
Route::get('frpe/user/{user}/edit/{frpe}/{s}', 'FrpeController@edit')->name('frpe.edit');
Route::put('frpe/user/{user}/update/{frpe}/{s}', 'FrpeController@update')->name('frpe.update');
Route::get('frpe/user/{user}/{frpe}/calculos', 'FrpeController@calculos')->name('frpe.calculos');
Route::get('calculos/user/{user}/frpe', 'FrpeController@calcularTodo')->name('frpe.calcularTodo');

// ESTRÉS
Route::get('cee/user/{user}', 'CeeController@index')->name('cee.index');
Route::post('cee/user/{user}', 'CeeController@store')->name('cee.store');
Route::get('cee/user/{user}/edit/{cee}/{s}', 'CeeController@edit')->name('cee.edit');
Route::put('cee/user/{user}/update/{cee}/{s}', 'CeeController@update')->name('cee.update');
Route::get('cee/user/{user}/{cee}/calculos', 'CeeController@calculos')->name('cee.calculos');
Route::get('calculos/user/{user}/cee', 'CeeController@calcularTodo')->name('cee.calcularTodo');

// FICHA DE DATOS GENERALES
Route::get('fdg/user/{user}', 'FdgController@index')->name('fdg.index');
Route::post('fdg/user/{user}', 'FdgController@store')->name('fdg.store');
Route::get('fdg/user/{user}/edit/{fdg}/{s}', 'FdgController@edit')->name('fdg.edit');
Route::put('fdg/user/{user}/update/{fdg}/{s}', 'FdgController@update')->name('fdg.update');
Route::get('fdg/user/{user}/{fdg}/calculos', 'FdgController@calculos')->name('fdg.calculos');
Route::get('calculos/user/{user}/fdg', 'FdgController@calcularTodo')->name('fdg.calcularTodo');

// CREADOR DE EXCEL
Route::group(['middleware' => 'auth'], function(){
	Route::get('excel/{user}/{type}', 'ExcelController@export')->name('excel.export');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');