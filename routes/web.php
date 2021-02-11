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

Route::get('/user/login','App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/user/login','App\Http\Controllers\Auth\LoginController@login');
Route::get('/user/logout', 'App\Http\Controllers\Auth\LoginController@logout');

//Post
Route::group(['prefix' => 'post', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\PostController@create')->name('post');
    Route::post('/', 'App\Http\Controllers\PostController@store');
    Route::get('createconfirm', 'App\Http\Controllers\PostController@createConfirm')->name('createconfirm');
    Route::get('{postId}', 'App\Http\Controllers\PostController@edit');
    Route::put('{postId}', 'App\Http\Controllers\PostController@update');
    Route::get('updateconfirm/{postId}', 'App\Http\Controllers\PostController@updateConfirm');
    Route::get('detail/{postId}', 'App\Http\Controllers\PostController@detail');
    Route::delete('{postId}', 'App\Http\Controllers\PostController@destroy');
});

Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\PostController@index');
    Route::get('search', 'App\Http\Controllers\PostController@search');
    Route::get('excel', 'App\Http\Controllers\PostController@import');
    Route::post('import', 'App\Http\Controllers\PostController@upload');
});

//User
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\UserController@create')->name('user');
    Route::post('createconfirm', 'App\Http\Controllers\UserController@createConfirm');
    Route::post('/', 'App\Http\Controllers\UserController@store');
    Route::get('/password', 'App\Http\Controllers\UserController@editPassword');
    Route::put('/password', 'App\Http\Controllers\UserController@updatePassword');
    Route::get('/show', 'App\Http\Controllers\UserController@show');
    Route::get('{userId}', 'App\Http\Controllers\UserController@edit');
    Route::post('updateconfirm/{userId}', 'App\Http\Controllers\UserController@updateConfirm');
    Route::put('{userId}', 'App\Http\Controllers\UserController@update');
    Route::delete('{userId}', 'App\Http\Controllers\UserController@destroy');
});

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('search', 'App\Http\Controllers\UserController@search');
});
Auth::routes();