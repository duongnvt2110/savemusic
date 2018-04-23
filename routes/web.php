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
});
Route::get('index',[
'as'=>'home',
'uses'=>'HomeController@getIndex'
]);
route::get('login',[
	'as'=>'login',
	'uses'=>'AdminController@getIndex'
]);
route::post('login',[
	'as'=>'login',
	'uses'=>'AdminController@adminLogin'
]);

route::get('user',[
	'as'=>'user',
	'uses'=>'AdminController@indexuser'
]);