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

Route::get('add','ProductController@create');
Route::get('addCombo','ProductController@comboCreate');
Route::post('addCombo','ProductController@storeCombo');
Route::post('add','ProductController@store');
Route::get('/','ProductController@index');
Route::get('view','ProductController@index');
Route::get('edit/{id}','ProductController@edit');
Route::post('edit/{id}','ProductController@update');
Route::delete('{id}','ProductController@destroy');