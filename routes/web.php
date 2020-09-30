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
index file we can start like that
*/

/* Route::get('/', function () {
    return view('home');
});  */


/* we use controller for routing */

Route::get('/','SiteController@home');

Route::post('/form','SiteController@formHandler');

Route::get('/about','SiteController@about');


/* we can route another page like this */

Route::get('/contact','SiteController@contact');

Route::post('/contact','SiteController@contactHandellar');

Route::get('/post/{id}','SiteController@post');






