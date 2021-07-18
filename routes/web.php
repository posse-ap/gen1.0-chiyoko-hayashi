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

// QuizyControllerの設定
// リスト4-3参照
use \App\Http\Middleware\QuizyMiddleware;

// リスト4-13参照
Route::get('quizy', 'QuizyController@index')
    ->middleware('quizy');