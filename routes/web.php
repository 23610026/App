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

Route::get('/questionnaires/create', 'QuestionnairesController@create');

Route::post('/questionnaires', 'QuestionnairesController@store');

Route::get('/questionnaires', 'QuestionnairesController@index');


//Route::get('/questions/create', 'QuestionsController@create');

//Route::post('/questions/show', 'QuestionsController@store');
