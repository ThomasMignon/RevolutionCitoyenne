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


/** 
	FrontEnd Routing
**/

Route::resource('/','FrontEndController');
Route::post('contact', 'FrontEndController@contact');
Route::post('inscription', 'FrontEndController@inscription');

Route::get('moncompte','MemberController@viewCompte');
Route::get('/login','FrontEndController@login');
Route::post('/login','FrontEndController@connexion');
Route::get('/test','FrontEndController@test');
/** 
	Admin Routing
**/

Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function () {
	Route::get('/','Admin\DashboardController@index');
	Route::resource('/article', 'Admin\ArticleController');
	Route::resource('/interview', 'Admin\InterviewController');
	Route::resource('/theme', 'Admin\ThemeController');
});