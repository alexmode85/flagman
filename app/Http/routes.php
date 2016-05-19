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

Route::get('/', ['as' => 'index', 'uses' => 'NewsController@index']);
Route::get('/index.html', ['as' => 'index', 'uses' => 'NewsController@index']);
Route::get('menu', ['as' => 'menu', 'uses' => 'MenuController@menu']);
//Route::get('/menu.html', function () {
//    return view('pages.menu');
//});
Route::get('/banket', function () {
    return view('pages.banket');
});
Route::get('/reviews', function () {
    return view('pages.reviews');
});
Route::get('/wine-card', function () {
    return view('pages.wine-card');
});

Route::get('news', ['as' => 'news', 'uses' => 'NewsController@news']);
Route::get('news/{slug}', ['as' => 'news.record', 'uses' => 'NewsController@cart']);

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('message/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);