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

/* Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@destroy')->where('id', '[0-9]+')->name('user.destroy');
Route::get('/user/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::post('/user/{id}/edit', 'App\Http\Controllers\UserController@edit')->where('id', '[0-9]+')->name('user.edit');
//Route::resource('/user', 'App\Http\Controllers\UserController');
