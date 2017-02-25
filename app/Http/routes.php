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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::group(['prefix'=>'admin'],function (){
    Route::get('salut/{slug}-{id}', ["as"=>"salut",'uses'=>'CoolController@index'])->where('slug','[a-z0-9\-]+')->where('id','[0-9]+');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
