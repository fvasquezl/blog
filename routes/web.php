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



Route::prefix('/admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/posts','PostsController@index')->name('admin.posts.index');
        Route::get('/posts/create','PostsController@create')->name('admin.posts.create');
    });

Route::auth();