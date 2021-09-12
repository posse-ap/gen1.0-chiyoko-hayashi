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

// リスト4-3
use \App\Http\Middleware\HelloMiddleware;

// リスト4-13
Route::get('hello', 'HelloController@index')
    ->middleware('helo');

// リスト5-10
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

// リスト5-13
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

// リスト5-16
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

// リスト5-20
Route::get('hello/show', 'HelloController@show');

// リスト6-4
Route::get('person', 'PersonController@index');

// リスト6-9
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');