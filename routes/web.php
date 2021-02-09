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
    Route::post('createconfirm', 'App\Http\Controllers\PostController@createconfirm')->name('createconfirm');
    Route::get('{postId}', 'App\Http\Controllers\PostController@edit');
    Route::put('{postId}', 'App\Http\Controllers\PostController@update');
    Route::post('updateconfirm/{postId}', 'App\Http\Controllers\PostController@updateconfirm');
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
    Route::get('/', 'App\Http\Controllers\UserController@create');
    Route::post('/', 'App\Http\Controllers\UserController@store');
    Route::get('{userId}', 'App\Http\Controllers\UserController@edit');
    Route::put('{userId}', 'App\Http\Controllers\UserController@update');
    Route::get('show/{userId}', 'App\Http\Controllers\UserController@show');
    Route::get('detail/{userId}', 'App\Http\Controllers\UserController@detail');
    Route::get('{userId}/password', 'App\Http\Controllers\UserController@editpassword');
    Route::put('{userId}/password', 'App\Http\Controllers\UserController@updatepassword');
});
Route::get('users', 'App\Http\Controllers\UserController@index')->middleware('auth');
Auth::routes();