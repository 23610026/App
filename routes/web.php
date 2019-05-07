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

Route::resource('/', 'HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaire/create', 'QuestionnairesController@create');

Route::get('/questionnaire/show', 'QuestionnairesController@store');

Route::get('/questionnaire/create', 'QuestionsController@create');

Route::post('/questionnaire/show', 'QuestionnairesController@store');
