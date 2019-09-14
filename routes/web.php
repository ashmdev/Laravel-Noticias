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


Route::get('/', function () {
    return view('welcome');
});

Route::resource('Tags','TagsController');
Route::resource('Category','CategoryController');

  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::redirect('/','noticias');


Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');

//Web
Route::get('noticias',          'Web\PageController@noticias')  ->name('noticias');
Route::get('noticias/{slug}',   'Web\PageController@post')      ->name('post');
Route::get('categoria/{slug}',  'Web\PageController@category')  ->name('category');
Route::get('etiqueta/{slug}',   'Web\PageController@tag')       ->name('tag');
//Admin
Route::resource('tags',         'Admin\TagController');
Route::resource('categories',   'Admin\CategoryController');
Route::resource('posts',        'Admin\PostController');
