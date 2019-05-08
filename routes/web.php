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

Route::get('/home', 'HomeController@index')->name('home'); //Route establishes that this is to do with navigation around the application

Route::get('/questionnaires/create', 'QuestionnairesController@create'); //get calls to the following destination, to direct the user there

Route::post('/questionnaires', 'QuestionnairesController@store'); //post indicates the storing of data at the destination

Route::get('/questionnaires', 'QuestionnairesController@index'); // the first '/XxX' is the weblink that is followed to reach the intended destination of the route

Route::get('/questions/create', 'QuestionsController@create'); // the final part calls to the controller and specifies which function within the controller, i.e. create, store, or index

Route::post('/questions', 'QuestionsController@store');

Route::get('/questions', 'QuestionsController@index');

Route::get('/responses/create', 'ResponsesController@create');

Route::post('/responses', 'ResponsesController@store');

Route::get('/responses', 'ResponsesController@index');

Route::get('/respondents/create', 'RespondentsController@create');

Route::post('/respondents', 'RespondentsController@store');

Route::get('/respondents', 'RespondentsController@index');

Route::get('/delete/{id}', 'QuestionnairesController@delete');

Route::get('/delete/{id}', 'QuestionsController@delete');

Route::view('/thanks', 'thanks');


//Route::get('/questions/create', 'QuestionsController@create');

//Route::post('/questions/show', 'QuestionsController@store');
