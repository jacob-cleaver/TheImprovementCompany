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

Route::group(['middleware' => 'web'], function() {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', 'HomeController@index');
    Route::get('/kitchens', 'KitchensController@index');
    Route::get('/bathrooms', 'BathroomsController@index');
    Route::get('/extensions', 'ExtensionsController@index');
    Route::get('/joinery', 'JoineryController@index');
    Route::get('/gallery', 'GalleryController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/contact', 'ContactController@index');
});
