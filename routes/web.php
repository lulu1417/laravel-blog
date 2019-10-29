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

//Home page
Route::get('/', 'HomeController@index')->name('index');
//search
Route::get('search', 'HomeController@search')->name('search');

//show login form
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//post login data
Route::post('login', 'Auth\LoginController@login');
//logout
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::resource('posts', 'PostsController');
Route::resource('posts/types', 'PostTypesController',['except'=>['index']]);




//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
