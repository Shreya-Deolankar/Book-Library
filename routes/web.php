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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: get('/',array('as'=>'home','uses'=>'UserController@home'));
Route:: get('/login',array('as' => 'login','uses'=> 'UserController@getLogin'));
Route:: get('/register',array('as' => 'register','uses'=> 'UserController@getRegister'));