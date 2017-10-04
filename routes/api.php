<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


  Route::get('/', function () {
      return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;
  });

  Route::get('users/{id}', 'Api\ApiUserController@index')->name('all_users');  
  Route::get('users/', 'Api\ApiUserController@unauth')->name('unathorized');  
  Route::get('plataform/', 'Api\ApiUserController@unauth')->name('unathorized');  
  
  
  

