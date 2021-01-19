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
// Route::get('post', 'App\Http\Controllers\PostController@create');
// Route::post('post', 'App\Http\Controllers\PostController@store');
// Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('post_confirm/1', 'App\Http\Controllers\PostController@confirm');
// Route::get('post/edit', 'App\Http\Controllers\PostController@edit');
Route::get('update_confirm/1', 'App\Http\Controllers\PostController@updateconfirm');
Route::resource('posts', App\Http\Controllers\PostController::class);

//User
Route::resource('users', App\Http\Controllers\UserController::class);
