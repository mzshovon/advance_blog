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


//user routes

Route::group(['namespace'=>'User'],function(){

Route::get('/', 'HomeController@index' );

Route::get('post','PostController@index')->name('post');


});

// Route::get('/', 'User\HomeController@index' );

// Route::get('post','User\PostController@index')->name('post');

//Admin routes

Route::group(['namespace'=>'Admin'],function(){

Route::resource('admin/post','PostController');
Route::resource('admin/tag','TagController');
Route::resource('admin/category','CategoryController');
Route::get('admin/home','HomeController@index')->name('admin.home');


});


// Route::resource('admin/post','Admin\PostController');
// Route::resource('admin/tag','Admin\TagController');
// Route::resource('admin/category','Admin\CategoryController');



// Route::get('admin/home', function () {
//     return view('admin.home');
// });



