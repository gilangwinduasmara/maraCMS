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

Route::get('/', 'PostController@index');

Route::get('/admin', 'AdminController@index');
Route::post('/admin/preview', 'PostingController@preview');
Route::get('/admin/upload/form', 'FileController@modal');
Route::get('/admin/uploads', 'FileController@index');
Route::post('/admin/upload', 'FileController@store');
Route::post('admin/post', 'PostController@store');


Route::Get('/category={category}', 'PostController@indexWithCategory');
// Route::Get('/post/{post}', '');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
