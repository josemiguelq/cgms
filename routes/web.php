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

Route::post('/', 'InvitationController@create')->name('new_invitation');  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/plataform', 'PlataformController@index')->name('new_plataform');
Route::post('/plataform', 'PlataformController@create')->name('create_plataform');

