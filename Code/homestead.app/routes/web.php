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
    return view('home.index');
})->name('home.index');

Route::get('manageclass', function (){
    return view('manage_class.managecl');
})->name('manage_class.managecl');

Route::get('upload', function () {
    return view('upload_videos.upload');
})->name('upload_videos.upload');

Route::get('statistics', function () {
    return view('statistics.stat');
})->name('statistics.stat');

Route::get('notifications', function () {
    return view('notifications.not');
})->name('notifications.not');

Route::get('current', function () {
    return view('current_videos.current');
})->name('current_videos.current');