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

/*

Route::get('/please', function(){
    return "<h1> to <h1>";
});


Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name. ' with shoes size of '.$id;
});

*/

//Pages Controller
Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//Post Controller
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostController@index');
Route::resource('posts','PostsController');
Auth::routes();

//Checkout Controller
Route::get('/posts/checkout', 'CheckoutsController@index');
Route::resource('posts','PostsController');
Auth::routes();

//Dashboard Controller
Route::get('/dashboard', 'DashboardController@index');
