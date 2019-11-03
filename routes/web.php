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
    return view('home');
});

Route::get('/art', function () {
    return view('artworks/artworks');
});

Route::get('/galleries', function () {
    return view('galleries/galleries');
});

Route::get('/rules', function () {
    return view('rules/rules');
});

Route::get('/appli', function () {
    return view('applinego/appli');
});
//////////////Users///////////////