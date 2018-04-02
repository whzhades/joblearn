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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/','LoginController@login' );
Route::group(['prefix'=>'admin','namespace'=>'admin'],function () {
    Route::get('login', 'LoginController@login');
    Route::post('save','LoginController@save');
    Route::get('user','LoginController@page');
    Route::get('sql','LoginController@ormtest');
    Route::get('/','IndexController@index');
    Route::get('test','LoginController@test');

});
