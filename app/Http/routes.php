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

// Route::get('/register',function(){
// 	return view('register');
// });

Route::auth();

Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::get('/home', 'HomeController@index');

Route::get('user/{id}/profile_pic', 'ImageController@showProfilePic');

Route::get('user/edit_profile','HomeController@edit');

Route::controller('/admin/edit_database', 'DatatablesController', [
    'anyData'  => 'admin/edit_database.data',
    'getIndex' => 'admin/edit_database',
]);
