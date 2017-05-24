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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/test', 'TestController@show')->name('test');

Route::get('/test', ['as' => 'test' , 'uses' => 'TestController@getAticles']);

Route::get('/create', ['as' => 'create' , 'uses' => 'TestController@addAticles']);
