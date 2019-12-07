<?php

Route::get('/', 'Web\HomeController@index')->name('homepage');
Route::resource('blog', 'Admin\BlogController');