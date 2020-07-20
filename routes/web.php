<?php
Route::get('/', function () {
 
    return view('welcome');

});


Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');

Route::get('login','LoginController@index')->name('user.login');
Route::post('login','LoginController@login')->name('login');
Route::post('logout','LoginController@logout')->name('logout');

Route::resource('post','PostController');
Route::resource('user','UserController');
Route::resource('category','CategoryController');
Route::resource('author','AuthorController');








