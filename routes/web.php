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

Route::get('/', function () {
    return view('home');
});

/* we can route another page like this */

Route::get('/contact',function()
    {
        return view('contact');

    }
);


/* we can route with parameter like this */

Route::get('/post/{id}',function($id)
    {
        return " you passed: " . $id ;

    }
);

/* we can route with parameter  or without parameter like this */

Route::get('/post/{id?}',function($id=null)
    {
        if($id)
            return " you passed: " . $id ;
        else
             return "No parameter";

    }
);






