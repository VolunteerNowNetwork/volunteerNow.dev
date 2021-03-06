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

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::resource('nonprofit', 'NonprofitController');

Route::resource('employee', 'EmployeeController');

Route::resource('employer', 'EmployerController');

Route::resource('posts', 'PostsController');

Route::resource('feedback', 'FeedbackController');

Route::resource('attendance', 'AttendanceController');

Route::get('/register', function () {
	return view('auth.mainregister');
});

Route::get('/events', function(){
    return view('events.index');
});

Route::get('/allevents', 'PostsController@all');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




//route for events search
Route::resource('/posts', 'PostsController');

Route::get('/masterCalendar', function()
{
	return view('masterCalendar');
});

Route::get('/welcome', function()
{
    return view('welcome');
});


// Route after login for appropriate user-group
Route::get('dashboard', function() {
    $user = \Auth::user();
    if($user->user_group == 'employee') {
        return redirect()->action('EmployeeController@show', $user->id);
    } else if($user->user_group == 'nonprofit'){
        return redirect()->action('NonprofitController@show', $user->id);
    } else {
        return redirect()->action('EmployerController@show', $user->id);
    }
});
