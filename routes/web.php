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
    Route::get('/', 'App\Http\Controllers\PostController@create');
    Route::post('/', 'App\Http\Controllers\PostController@store');
    Route::post('createconfirm', 'App\Http\Controllers\PostController@createconfirm')->name('createconfirm');
    Route::get('{postId}', 'App\Http\Controllers\PostController@edit');
    Route::put('{postId}', 'App\Http\Controllers\PostController@update');
    Route::get('updateconfirm/{postId}', 'App\Http\Controllers\PostController@updateconfirm');
    Route::get('detail/{postId}', 'App\Http\Controllers\PostController@detail');
});

Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\PostController@index');
    Route::get('/userpost', 'App\Http\Controllers\PostController@userpost');
    Route::get('excel', 'App\Http\Controllers\PostController@csvUpload');
});
//User
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\UserController@create');
    Route::post('/', 'App\Http\Controllers\UserController@store');
    Route::get('createconfirm/{userId}', 'App\Http\Controllers\UserController@createconfirm');
    Route::get('{userId}', 'App\Http\Controllers\UserController@edit');
    Route::put('{userId}', 'App\Http\Controllers\UserController@update');
    Route::get('updateconfirm/{userId}', 'App\Http\Controllers\UserController@updateconfirm');
    Route::get('show/{userId}', 'App\Http\Controllers\UserController@show');
    Route::get('detail/{userId}', 'App\Http\Controllers\UserController@detail');
    Route::get('{userId}/password', 'App\Http\Controllers\UserController@editpassword');
    Route::put('{userId}/password', 'App\Http\Controllers\UserController@updatepassword');
});
Route::get('users', 'App\Http\Controllers\UserController@index')->middleware('auth');
Auth::routes();

