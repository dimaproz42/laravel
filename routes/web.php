<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/asdasdasd',"AasdasdsadController@index");

Route::get('/home',"HomeController@index");

Route::get('/adress',"AdressController@index");

Route::get('/fish',"FishController@index");

Route::get('/town',"TownController@index");
