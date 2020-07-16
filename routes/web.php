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

Route::get('/', 'PagesController@index');
Route::get('/rooms', 'RoomsController@index');
Route::get('/rooms/create', 'RoomsController@create');
Route::post('/rooms', 'RoomsController@store');

Route::get('/classprops/{classroom}','ClasspropController@index');

Route::get('/classrooms', 'ClassroomsController@index');
Route::get('/classrooms/{classroom}', 'ClassroomsController@show');
Route::get('/classrooms/create', 'ClassroomsController@create');
Route::post('/classrooms/store', 'ClassroomsController@store');
Route::delete('/classrooms/{classroom}','ClassroomsController@destroy');

Route::post('/properties', 'PropertiesController@store');
Route::get('/properties', 'PropertiesController@index');

Route::post('classprops','ClasspropController@store');

Route::post('upload','FilesController@store');

