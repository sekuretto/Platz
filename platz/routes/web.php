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
Route::get('aboutesim', 'PagesController@about');
Route::get('aboutesim2', 'PagesController@about2');
Route::get('add2', 'PagesController@add2');
Route::get('/profiles/{id}', 'ProfileController@show');

Route::get('profiili1', 'profiilicontroller@showinfo');
Route::get('profiili2', 'profiilicontroller@returninfo');

Route::get('profiili1folder', 'profiilicontroller@viewfromfolder');
Route::get('profiili2folder', 'profiilicontroller@viewfromfolder2');

Route::get('add', 'PagesController@add');

Route::get('/', function () {
    return view('welcome');
});
Route::get('profiili', function () {
    return view('profiili');
});


Route::resource('/', 'PostsController');
Route::resource('profiles', 'ProfileController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
