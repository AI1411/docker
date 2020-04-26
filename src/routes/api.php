<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('signup', 'AuthController@signup');
});

Route::get('/regions', 'PlaceController@regions');
Route::get('/prefs', 'PlaceController@prefs');
Route::get('/pref/{pref}', 'PlaceController@pref');
Route::get('/cities', 'PlaceController@cities');
