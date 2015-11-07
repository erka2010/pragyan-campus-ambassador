<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UserController@index');

Route::get('/users', 'UserController@show');

Route::get('/users/approve/{id}', 'UserController@approve');

Route::get('/users/reject/{id}', 'UserController@reject');

Route::get('/facebook/callback', "UserController@fbcallback");

Route::get('/register', "UserController@create");

Route::post('/register', "UserController@store");

Route::get('/home', "UserController@home");

Route::get('/tasks/create', "TasksController@create");

Route::post('/tasks/create', "TasksController@store");

Route::get('/tasks', "TasksController@index");