<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books', 'Api\Books\BooksController@books');
Route::get('books/{id}', 'Api\Books\BooksController@booksById');

Route::post('login', 'Api\Auth\LoginController@login');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::put('books/{id}', 'Api\Books\BooksController@booksEdit');
    Route::delete('books/{id}', 'Api\Books\BooksController@booksDelete');
    Route::get('refresh', 'Api\Auth\LoginController@refresh');
});
