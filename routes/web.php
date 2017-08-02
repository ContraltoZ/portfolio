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


Route::get('/','ProjController@index');

Route::get('/fullProfile','ProjController@fullProfile');

Route::get('/projects','ProjController@projects');

Route::get('/projList/proj/{proj}','ProjController@projDetail');

Route::get('/contact','ProjController@contact');

Route::post('/','ProjController@store');