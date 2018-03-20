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

/*--
Route::get('/', function () {
    return view('front/index');
});
*/

Route::get('/', [
    'as' => 'root_path', 
    'uses' => 'HomeController@index'
]);



Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@contact'
]);

Route::get('/login', [
    'as' => 'login_path',
    'uses' => 'LoginController@login'
]);
