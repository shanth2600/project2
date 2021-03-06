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
    return redirect('login');
});

Route::get('login',function(){
	return view('login');
});

Route::post('project','ProjectController@store');

Route::resource('image','ImageController');

Route::get('canvas','CanvasController@index');

Route::post('login','UserController@login');

Route::post('signup','UserController@createUser');

Route::get('profile/{id}','ProfileController@show');
