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
//Route::get('links/create','LinksController@create');
Route::resource('link','LinksController',['only'=>['create','store']]);
Route::resource('news','PostsController');
Route::get('r/{link}',['as'=>'link.show','uses'=>'LinksController@show'])->where('link','[0-9]+');

//Route::post('links/create','LinksController@store');
//Route::get('links/{id}','LinksController@show')->where('id','[0-9]+');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
