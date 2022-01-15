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
Route::get('/admin/edit/{question_id}', 'Admin\QuizyController@editquestion')->name('edit');
Route::post('/admin/edit/{question_id}', 'Admin\QuizyController@editquestionpost');
Route::get('/admin/add/question', 'Admin\QuizyController@addquestion')->name('addquestion');
Route::post('/admin/add/question', 'Admin\QuizyController@addquestionpost');
Route::get('/admin/add/big_question/{question_id}', 'Admin\QuizyController@addbigquestion')->name('addbigquestion');
Route::post('/admin/add/big_question/{question_id}', 'Admin\QuizyController@addbigquestionpost');
Route::get('/admin/delete/question/{question_id}', 'Admin\QuizyController@deletequestion');
Route::post('/admin/delete/question/{question_id}', 'Admin\QuizyController@deletequestion');
Route::get('/admin/delete/big_question/{big_question_id}', 'Admin\QuizyController@deletebigquestion');
Route::post('/admin/delete/big_question/{big_question_id}', 'Admin\QuizyController@deletebigquestion');
Route::get('admin/edit/title/{question_id}', 'Admin\QuizyController@editquestiontitle');
Route::post('admin/edit/title/{question_id}', 'Admin\QuizyController@editquestiontitlepost');
// Route::get('/admin/{id}/edit?choices_id=1', 'Q/Admin/uizController@index')->name('home');
// Route::get('/complete', '/Admin/QuizController@index')->name('home');