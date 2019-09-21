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

Route::get('/',function(){
    return view('login');
});

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('/login', 'PagesController@login');

Route::get('/register','PagesController@register');
Route::post('/signup','PagesController@sign_up');
Route::post('/checklogin','PagesController@check_login');
Route::get('/index',function(){
    return view('index');
});

Route::post('/buslist','PagesController@buslist');
Route::get('/busdetails/{busno?}/{seatno?}','PagesController@busdetails');

Route::post('/myadmin',function(){
    return view('myadmin');
});