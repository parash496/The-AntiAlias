<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', 'HotelsController@allhotels');

Route::get('/admin', 'AdminController@createhotel');

Route::post('/addcomment', 'CommentsController@addcomment');

Route::get('/{id}', 'CommentsController@hotelcomment');

Route::post('/addhotel', 'HotelsController@addhotel');

//Route::get('/home', 'HomeController@index');
