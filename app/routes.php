<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');

Route::get('/contact', 'HomeController@showContact');

Route::get('/vintage-collection', 'HomeController@showVintage');
Route::get('/cottage-collection', 'HomeController@showCottage');
Route::get('/whimsy-collection', 'HomeController@showWhimsy');

