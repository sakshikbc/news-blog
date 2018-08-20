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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/social-media', function () {
    return view('social-media');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/match-details', 'MatchController@create');
Route::post('/match-details', 'MatchController@store');
Route::get('/matches', 'MatchController@index');
Route::get('/match-detail/{id}', 'MatchController@show')->name('match-detail.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
