<?php
Route::get('/', function () {
 
    return view('welcome');

});
Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');








