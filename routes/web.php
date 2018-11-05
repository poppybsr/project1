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

Route::get('/museum', function () {
    return view('pages.index');
});

Route::get('/', function () {
    return view('pages.start');
});
Route::get('/login', 'LoginController@form');
Route::get('/artobject', 'PagesController@artobject');
Route::get('/painting', 'PagesController@painting');
Route::get('/sculpture', 'PagesController@sculpture');
Route::get('/other', 'PagesController@other');
Route::get('/artist', 'PagesController@artist');
Route::get('/collection', 'PagesController@collection');

Route::get('/exhibition', 'PagesController@exhibition');
Route::get('/goers', 'PagesController@goers');

