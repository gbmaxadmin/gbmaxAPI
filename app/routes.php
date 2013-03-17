<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('prefix' => 'api/v1'), function() {

	//these would be good for action end-points, like logging a user into the app
	Route::controller('user/login', 'UserLogin');


	//these would be good for returning application Resources/Objects, like the Users resource
  Route::resource('users', 'UsersController');
 
});



