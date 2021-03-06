<?php

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

Route::get('/','PostController@index')->name('post.index');

// Route::get('post/create','PostController@create')->name('post.create');
// Route::post('post/','PostController@store')->name('post.store');
// Route::get('post/{id}','PostController@show')->name('post.show');
// Route::delete('post/{id}','PostController@destroy')->name('post.destroy');
// Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
// Route::put('post/{id}','PostController@update')->name('post.update');

// Route::resource('/post','PostController')->middleware('auth');

Route::group(['middleware' => 'auth'],function(){
    Route::resource('/post','PostController')->except('index','show');
});
// Route::resource('/post','PostController')->middleware('auth');
Route::resource('/post','PostController')->only('index','show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/category','CategoryController');

Route::get('/tag/{tag}','TagController@tagPost')->name('tag.post');

Route::get('/trash','PostController@trash')->name('trash.index');
Route::get('/trash/{id}','PostController@restore')->name('trash.restore');
Route::delete('trash/{id}','PostController@delete')->name('trash.delete');