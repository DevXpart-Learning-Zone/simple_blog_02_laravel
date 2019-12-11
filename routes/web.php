<?php

Route::get('/', 'Web\HomeController@index')->name('homepage');
Route::resource('blog', 'Admin\BlogController');
Route::get('test/{id}', 'Admin\BlogController@test');