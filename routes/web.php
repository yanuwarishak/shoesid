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

//Pages Controller
//Route::get('/home', 'PagesController@home');
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');

//Post Controller
Route::get('/', 'PostsController@index');
Route::get('/home', 'PostsController@index');
Route::get('/posts/create', 'PostController@index');
Route::resource('posts','PostsController');
Auth::routes();

//Cart Controller
Route::get('/cart','CartsController@show');
Route::post('/cart/add','CartsController@add');
Route::resource('carts','CartsController');


//Dashboard Controller
Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

//Notadmin Controller (nama filenya masih home)
Route::get('/home', 'HomeController@index')
    ->name('home');

//Admin Controller
Route::get('/dashboard',"AdminController@admin")
    ->middleware('is_admin')
    ->name('admin');

//Register Seller
Route::get('/regseller',function(){
    return view('auth.regseller');
});
