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

Route::namespace('Web')->group(function (){
    $this->get('/','AppController@getApp')->middleware('auth');

    $this->get('/login','AppController@getLogin')->middleware('guest')->name('login');
});