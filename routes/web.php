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

// Route::resource('quiz', 'RestappController');
Route::get('quiz', 'QuestionsController@index')->name('questions');
Route::get('quiz/{id}', 'QuestionsController@show')->name('choices');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\QuizyController@index')->name('home');
Route::get('/admin/{id}', 'Admin\QuizController@show')->name('list');
// Route::get('/admin/{id}/edit?choices_id=1', 'Q/Admin/uizController@index')->name('home');
// Route::get('/complete', '/Admin/QuizController@index')->name('home');