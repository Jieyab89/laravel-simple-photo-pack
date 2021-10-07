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

Route::get('/', 'MenuController@index')->name('index');
Route::get('/feed', 'MenuController@feed')->name('feed');

Auth::routes();

Route::get('/home', 'UploadController@index')->name('home');
Route::get('/posting', 'UploadController@create')->name('post');
Route::post('/posting/store', 'UploadController@store')->name('post.buat');
