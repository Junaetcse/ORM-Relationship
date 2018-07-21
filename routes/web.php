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

Route::get('/one-to-one', 'UserController@oneToOne');
Route::get('/one-to-many', 'UserController@oneToMany');
Route::get('/many-to-many', 'UserController@manyToMany');
