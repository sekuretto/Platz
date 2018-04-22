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

Route::get('/posts/{postid}', 'PagesController@showpost');
Route::get('/profiles/{id}', 'ProfileController@show');

Route::get('vaihto', 'PagesController@vaihto');
Route::get('myynti', 'PagesController@myynti');
Route::get('osto', 'PagesController@osto');
Route::post('haku', 'PagesController@haku');
Route::get('haku', 'PagesController@haku');
Route::delete('{postid}', 'PostsController@destroy');
Route::post('deleteuser/{id}', 'PagesController@deleteuser');

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
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::post('report', 'PagesController@report');
Route::post('sendpsw', 'PagesController@sendpsw');