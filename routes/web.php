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

Route::group(['prefix' => 'user'], function () {
Route::get('/login','App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login','App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

//Post
Route::group(['prefix' => 'post'], function () {
    Route::get('/', 'App\Http\Controllers\PostController@create');
    Route::post('/', 'App\Http\Controllers\PostController@store');
    Route::get('createconfirm/{id}', 'App\Http\Controllers\PostController@createconfirm');
    Route::get('{postId}', 'App\Http\Controllers\PostController@edit');
    Route::put('{postId}', 'App\Http\Controllers\PostController@update');
    Route::get('updateconfirm/{id}', 'App\Http\Controllers\PostController@updateconfirm');
});
Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('posts/excel', 'App\Http\Controllers\PostController@csvUpload');

//User
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'App\Http\Controllers\UserController@create');
    Route::post('/', 'App\Http\Controllers\UserController@store');
    Route::get('createconfirm/{userId}', 'App\Http\Controllers\UserController@createconfirm');
    Route::get('{userId}', 'App\Http\Controllers\UserController@edit');
    Route::put('{userId}', 'App\Http\Controllers\UserController@update');
    Route::get('updateconfirm/{userId}', 'App\Http\Controllers\UserController@updateconfirm');
    Route::get('show/{userId}', 'App\Http\Controllers\UserController@show');
    Route::get('{userId}/password', 'App\Http\Controllers\UserController@editpassword');
    Route::put('{userId}/password', 'App\Http\Controllers\UserController@updatepassword');
});
Route::get('users', 'App\Http\Controllers\UserController@index');