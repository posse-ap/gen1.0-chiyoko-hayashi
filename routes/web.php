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

// リスト3-11
Route::get('hello', 'HelloController@index');

// リスト3-16
Route::post('hello', 'HelloController@post');