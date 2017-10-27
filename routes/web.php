<?php

// App
Route::get('/', 'PostController@index');
Route::get('post.{id}', 'PostController@show');

// Admin
Route::get('/admin', 'AdminController@index');

Route::get('/admin/post/create', 'PostController@create');
Route::post('/admin/post/validate', 'PostController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
