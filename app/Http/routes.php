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

Route::get('/', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => ['auth','administrator'], 'prefix'=> 'administrator'], function () {
    Route::get('/', function (){
        return view('admin/index');
    });
    Route::resource('profile','ProfileController');
    Route::resource('bets','BetController');
});

Route::group(['middleware' => ['auth','player'], 'prefix'=> 'player'], function () {
    Route::get('/',function(){
        return 'Hola';
    });
});