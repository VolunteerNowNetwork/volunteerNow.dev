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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('nonprofit', 'NonprofitController');

Route::resource('employee', 'EmployeeController');

Route::resource('employers', 'EmployerController');

Route::resource('event', 'EventController');

Route::resource('feedback', 'FeedbackController');

Route::get('/register', function () {
	return view('auth.mainregister');
});

Route::get('/events', function(){
    return view('events.index');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('users/{search}', function($search, Request))

Route::resource('/users', 'UsersController');

//route for events search
Route::resource('/posts', 'PostsController');

Route::get('/masterCalendar', function() 
{
	return view('masterCalendar');
});
