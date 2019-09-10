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

Route::get('post/{post}','PostController@post')->name('post');


});

// Route::get('/', 'User\HomeController@index' );

// Route::get('post','User\PostController@index')->name('post');

//Admin routes

Route::group(['namespace'=>'Admin'],function(){

//user under admin

Route::resource('admin/user','UserController');

//post
Route::resource('admin/post','PostController');

//tag
Route::resource('admin/tag','TagController');

//category
Route::resource('admin/category','CategoryController');


//admin home
Route::get('admin/home','HomeController@index')->name('admin.home');


});


// Route::resource('admin/post','Admin\PostController');
// Route::resource('admin/tag','Admin\TagController');
// Route::resource('admin/category','Admin\CategoryController');



// Route::get('admin/home', function () {
//     return view('admin.home');
// });



