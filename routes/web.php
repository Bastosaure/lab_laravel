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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listusers', 'HomeController@listUsers')->name('list-users');

Route::get('/listusers/profil', 'HomeController@lookProfil')->name('profil-user');

Route::get('/listusers/profil/{email}', 'HomeController@lookEmail')->name('profil-email');

route::get('article', 'ArticleController@show');
route::post('article', 'ArticleController@store');

route::get('listing', 'ArticleController@listing');
