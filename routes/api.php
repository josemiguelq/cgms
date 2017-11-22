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
  
  //
  Route::post('plataforms/', 'Api\ApiPlataformController@index')->name('all_plataforms')->middleware('auth');    
  Route::post('vacancies/','Api\ApiVacancyController@index')->name('all_vacancies')->middleware('auth');
  Route::get('vacancies/','Api\ApiVacancyController@index')->name('gall_vacancies')->middleware('auth');

  Route::get('vacancies/update','Api\ApiVacancyController@updateVacancy')->name('update_vacancy')->middleware('auth');
  Route::post('vacancies/update','Api\ApiVacancyController@updateVacancy')->name('update_vacancy')->middleware('auth');
  

