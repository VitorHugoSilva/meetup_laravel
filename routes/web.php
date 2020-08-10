<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => '\Blog\Http\Controllers\Web'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/blog/posts/{post}', 'PostController@show')->name('posts.show');
    Route::get('/blog/posts/from_category/{category}', 'PostController@fromCategory')->name('posts.from_category');
});
