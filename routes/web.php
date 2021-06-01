<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('posts.create');
Route::post('/', 'HomeController@store')->name('posts.store');
Route::get('page/about', 'PageController@show')->name('page.about');
Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');

Route::group(['middleware' => 'guest', 'prefix' => 'admin'], function(){
    Route::get('/register', 'UserController@create')->name('create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@LoginForm')->name('login.create');
    Route::post('/login', 'UserController@Login')->name('login');
});

Route::get('/logout', 'UserController@Logout')->name('logout')->middleware('auth');

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'MainController@index');
});





