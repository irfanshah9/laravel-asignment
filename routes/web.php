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


Route::get('/','ProjectController@index' )->middleware('auth');
Route::get('/index','ProjectController@index' )->middleware('auth');
Route::get('/add_project','ProjectController@create' )->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/storeform','ProjectController@store' )->middleware('auth');
Route::post('/storeform','ProjectController@store' )->middleware('auth');





