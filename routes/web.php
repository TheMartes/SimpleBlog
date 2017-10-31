<?php

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// HTTP Statuses
Route::get('403', 'httpStatusController@403');

// App endpoints

// Post
Route::get('/', 'PostController@index');
Route::get('post/{id}', 'PostController@show');

// User
Route::get('/a/{name}', 'UserController@show');

// Admin endpoints
Route::get('/admin', 'AdminController@index');

// Post
Route::get('/admin/post/create', 'PostController@create');
Route::post('/admin/post/validate', 'PostController@store');
Route::get('/admin/post/edit', 'PostController@edit');
Route::put('/admin/post/update', 'PostController@update');
Route::delete('/admin/post/delete', 'PostController@destroy');
