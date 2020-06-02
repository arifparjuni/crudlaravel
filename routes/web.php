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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peoples', 'PeoplesController@index');
Route::get('/peoples/create', 'PeoplesController@create');
Route::get('/peoples/{people}', 'PeoplesController@show');
Route::post('/peoples', 'PeoplesController@store');
Route::delete('/peoples/{people}', 'PeoplesController@destroy');
Route::get('/peoples/{people}/edit', 'PeoplesController@edit');
Route::patch('/peoples/{people}', 'PeoplesController@update');