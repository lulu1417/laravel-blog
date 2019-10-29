<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
