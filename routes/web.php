<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('posts.create');
Route::post('/', 'HomeController@store')->name('posts.store');
Route::get('page/about', 'PageController@show')->name('page.about');
Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');

Route::get('/register', 'UserController@create')->name('create');
Route::post('/register', 'UserController@store')->name('register.store');
