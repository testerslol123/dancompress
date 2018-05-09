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

Route::get('/compress', function () {
    return view('compress');
});

Route::get('/decompress', function () {
    return view('decompress');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});
