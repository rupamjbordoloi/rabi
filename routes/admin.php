<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::get('/question-paper', 'Admin\QuestionPaperController@index')->name('question-paper.index');
Route::get('/question-paper/create', 'Admin\QuestionPaperController@create')->name('question-paper.create');
Route::post('/question-paper/create', 'Admin\QuestionPaperController@store');
Route::get('/question-paper/show/{qp}', 'Admin\QuestionPaperController@show')->name('question-paper.show');
Route::get('/question-paper/edit/{qp}', 'Admin\QuestionPaperController@edit')->name('question-paper.edit');
Route::post('/question-paper/edit/{qp}', 'Admin\QuestionPaperController@update');
Route::get('/question-paper/delete/{qp}', 'Admin\QuestionPaperController@delete')->name('question-paper.delete');
Route::get('/question-paper/deactivate/{qp}', 'Admin\QuestionPaperController@deactivate')->name('question-paper.deactivate');
Route::get('/question-paper/activate/{qp}', 'Admin\QuestionPaperController@activate')->name('question-paper.activate');

