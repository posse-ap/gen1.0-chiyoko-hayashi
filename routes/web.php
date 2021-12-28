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

Auth::routes();;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\QuizyController@index')->name('home');
Route::get('/admin/edit/{question_id}', 'Admin\QuizyController@edit')->name('edit');
Route::post('/admin/edit/{question_id}', 'Admin\QuizyController@editpost');
Route::get('/admin/add/question', 'Admin\QuizyController@addquestion')->name('addquestion');
Route::post('/admin/add/question', 'Admin\QuizyController@addquestionpost');
Route::get('/admin/add/big_question/{question_id}', 'Admin\QuizyController@addbigquestion')->name('addbigquestion');
Route::post('/admin/add/big_question/{question_id}', 'Admin\QuizyController@addbigquestionpost');
Route::get('/admin/delete/{question_id}', 'Admin\QuizyController@delete')->name('delete');
Route::post('/admin/delete/{question_id}', 'Admin\QuizyController@deletepost');
// Route::get('/admin/{id}/edit?choices_id=1', 'Q/Admin/uizController@index')->name('home');
// Route::get('/complete', '/Admin/QuizController@index')->name('home');