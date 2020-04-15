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
Route::get('users', 'Controller@index');

Route::get('items', 'ItemController@index');
Route::get('items/{id}', 'ItemController@show');
Route::post('items', 'ItemController@store');
Route::put('items/{id}', 'ItemController@update');
Route::delete('items/{id}', 'ItemController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
