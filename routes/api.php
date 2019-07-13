<?php

use Illuminate\Http\Request;


Route :: group (['middleware' => 'cors'], function () {

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::get('players', 'PlayerController@index');
Route::get('players/{id}', 'PlayerController@show');
Route::post('players', 'PlayerController@store');
Route::put('players/{id}', 'PlayerController@update');
Route::delete('players/{id}', 'PlayerController@delete');

Route::get('matches', 'MatchController@index');
Route::get('matches/{id}', 'MatchController@show');
Route::post('matches', 'MatchController@store');
Route::put('matches/{id}', 'MatchController@update');
Route::delete('matches/{id}', 'MatchController@delete');

Route::get('rounds', 'RoundsController@index');
Route::get('rounds/{id}', 'RoundsController@show');
Route::post('rounds', 'RoundsController@store');
Route::put('rounds/{id}', 'RoundsController@update');
Route::delete('rounds/{id}', 'RoundsController@delete');
});
