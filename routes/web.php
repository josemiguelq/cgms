<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('landing_page');

Route::get('/invitations', 'InvitationController@index')->name('invitations');
Route::post('/', 'InvitationController@create')->name('new_invitation');  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/plataform', 'PlataformController@index')->name('index_plataform');
Route::post('/plataform/create', 'PlataformController@create')->name('create_plataform');
Route::post('/plataform/new', 'PlataformController@new')->name('new_plataform');

Route::get('/vacancy/request/{id}', 'VacancyController@request')->name('request_vacancy');
Route::get('/vacancy', 'VacancyController@index')->name('new_vacancy');
Route::post('/vacancy', 'VacancyController@create')->name('create_vacancy');
