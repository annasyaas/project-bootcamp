<?php

// Auth routes 
Auth::routes();

// ------------------------------------------------------------
// Frontend Area
// ------------------------------------------------------------
Route::get('/', 'FrontEndController@index');
Route::get('/read/{id}', 'FrontEndController@show');
Route::get('/category/{id}', 'FrontEndController@category');
Route::get('/search', 'FrontEndController@search');

// ------------------------------------------------------------
// Admin Prefix Group
// ------------------------------------------------------------
Route::prefix('admin')->middleware('auth')->group(function () {

    // ------------------------------------------------------------
    // Index Dashboard
    // ------------------------------------------------------------
    Route::get('/', 'HomeController@index');

    // ------------------------------------------------------------
    // Post
    // ------------------------------------------------------------
    Route::get('/posts', 'PostController@index');
    Route::get('/posts/create', 'PostController@create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{id}/edit', 'PostController@edit');
    Route::put('/posts/{id}', 'PostController@update');
    Route::delete('/posts/{id}', 'PostController@destroy');
    
    // ------------------------------------------------------------
    // Categories
    // ------------------------------------------------------------
    Route::resource('/categories', 'CategoryController');
    
    // ------------------------------------------------------------
    // Static Route  
    // ------------------------------------------------------------
    Route::get('/test', 'TestController@index');
    
    Route::get('/adminlte', function () {
        return view('adminlte');
    });
    
    Route::get('/belajar-js', function () {
        return view('belajar-js');
    });

});    