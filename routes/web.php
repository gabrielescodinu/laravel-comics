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

Route::get('/', 'PageController@index')->name('homepage');
Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::get('comics', 'PostController@index')->name('posts');
Route::get('comic/{post}', 'PostController@show')->name('show');

Auth::routes();

// admin
Route::middleware('auth')->namespace('admin')->prefix('admin')->name('admin.')->group(function( ){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');
});
