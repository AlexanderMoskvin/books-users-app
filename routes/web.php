<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticController@index');

Route::resource('books', 'BooksController');

Auth::routes();

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/users', [App\Http\Controllers\UserController::class, 'users']);
