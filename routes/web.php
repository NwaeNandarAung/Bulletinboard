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
Route::get('/login','App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login','App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//Post
Route::get('post', 'App\Http\Controllers\PostController@create');
Route::post('post', 'App\Http\Controllers\PostController@store');
Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('post_confirm/1', 'App\Http\Controllers\PostController@confirm');
Route::get('post/{id}', 'App\Http\Controllers\PostController@edit');
Route::put('post/{id}', 'App\Http\Controllers\PostController@update');
Route::get('update_confirm/1', 'App\Http\Controllers\PostController@updateconfirm');

//User
Route::get('user', 'App\Http\Controllers\UserController@create');
Route::post('user', 'App\Http\Controllers\UserController@store');
Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('user_confirm/1', 'App\Http\Controllers\UserController@confirm');
Route::get('user/{id}', 'App\Http\Controllers\UserController@edit');
Route::put('user/{id}', 'App\Http\Controllers\UserController@update');
Route::get('update_uconfirm/1', 'App\Http\Controllers\UserController@updateconfirm');
Route::get('user/show/{id}', 'App\Http\Controllers\UserController@show');
Route::get('edit_password/{id}', 'App\Http\Controllers\UserController@editpassword');
Route::put('update_password/{id}', 'App\Http\Controllers\UserController@updatepassword');
