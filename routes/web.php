<?php

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

Route::get('/', 'PostController@index');

Route::get('category','CategoryController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')
    ->name('admin.')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function(){
        Route::get('/posts','PostsController@index')->name('posts');
    });
