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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('config', 'ConfigController');
Route::resource('events', 'EventsController');
Route::get('findAll', 'EventsController@findAll');
Route::resource('clinic', 'ClinicController');
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'ClinicController@autocomplete'));
//Route::get('autocomplete', 'ClinicController@autocomplete');
