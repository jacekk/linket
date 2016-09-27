<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('feed', 'HomeController@feed');

Route::get('links/create', 'LinksController@create');
Route::get('links/{link}/remove', 'LinksController@remove');
Route::delete('links/{link}/remove', 'LinksController@delete');
Route::post('links/new', 'LinksController@storeNew');
Route::get('links/{link}', 'LinksController@view');

Route::get('vue-example', function () {
    return view('vue-example');
});
