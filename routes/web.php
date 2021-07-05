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

Route::get('inv_show','invController@show');
Route::get('delete/{id}','invController@destroy');
Route::get('add','invController@create');
Route::post('submit','invController@store');
Route::get('edit/{id}','invController@edit');
Route::post('update/{id}','invController@update')->name('inv.update');
