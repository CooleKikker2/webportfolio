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
    return view('home');
});

Route::get('/over', function(){
    return view('over');
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/portfolio-detail/{id}', 'WorkController@SelectWork');

Route::get('/login', 'AuthController@showLogin');
Route::post('/post-login', 'AuthController@postLogin');
Route::get('/dashboard', 'AuthController@dashboard');
Route::get('/logout', 'AuthController@logout');