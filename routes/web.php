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
    return view('main');
});

// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/user', 'HomeController@user')->middleware('verified');;
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articls/{new}', 'HomeController@articls')->name('new');

// Route::get('/search', 'HomeController@search')->name('search');

Route::get('/choice', 'ChoiceController@index');
