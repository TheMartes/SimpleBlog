<?php

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Public

    // Post
    Route::get('/', 'PostController@index');
    Route::get('post/{slug}', 'PostController@show');

    // Users
    Route::get('profile', 'UserController@index');
    Route::get('profile/edit', 'UserController@edit');
    Route::put('profile/update', 'UserController@update');
    Route::get('{user}', 'UserController@show');

// Admin

    // Admin
    Route::get('/admin', 'Admin\AdminController@index');

    // Users
    Route::get('admin/user', 'UserController@list');
    Route::get('admin/user/new', 'UserController@create');
    Route::post('admin/user/store', 'UserController@store');
    Route::delete('admin/user/delete', 'UserController@destroy');

    //Post
    Route::get('/admin/post/create', 'PostController@create');
    Route::post('/admin/post/validate', 'PostController@store');
    Route::get('/admin/post/edit', 'PostController@edit');
    Route::put('/admin/post/update', 'PostController@update');
    Route::delete('/admin/post/delete', 'PostController@destroy');
