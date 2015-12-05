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
// Authentication routes...
Route::get('/', 'LoginRegisterController@showLoginView');


Route::get('game', function () {
    return view('game');
});

Route::get('gameLobby', function () {
    return view('gameLobby');
});

// Authentication routes...
Route::any('login', 'LoginRegisterController@showLoginView');
Route::post('login/confirmation', ['as' => 'login-confirm', 'uses' => 'LoginRegisterController@login']);


// Registration routes...
Route::any('register', ['as' => 'form-register', 'uses' => 'LoginRegisterController@showRegisterView']);

Route::any('register/registration', ['as' => 'form-register', 'uses' => 'LoginRegisterController@registerAccount']);

Route::any('logout', ['as' => 'logout', 'uses' => 'LoginRegisterController@logout']);


