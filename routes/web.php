<?php

Route::get('/', 'Web\HomeController@index')->name('homepage');
Route::get('/profile', 'Web\HomeController@profile')->name('profile');
Route::resource('blog', 'Admin\BlogController');
Route::get('test/{id}', 'Admin\BlogController@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');