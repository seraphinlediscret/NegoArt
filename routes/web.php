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
    return view('auth/login');
});

Route::get('/sculpture', 'SculptureController@index');

Route::get('/textile', 'TextileController@index');

Route::get('/paint', 'PaintController@index');


Route::get('/art', 'AllartsController@index');
// ->middleware('auth');

Route::get('/appli', 'ApplicationController@index');

////////create artwork//////////

Route::get('/create', 'CreateController@index');
Route::resource('/created', 'CreateController');
// ->middleware('auth');

Route::post('/create', function () {
    $artwork = App\Artwork::create([
        'name'=> request('name'),
        'price'=> request('price'),
        'theme'=> request('theme'),
        'date'=> request('date'),
        'height'=> request('height'),
        'width'=> request('width'),
        'weight'=> request('weight'),
        'material(s)'=> request('material(s)'),
        'color(s)'=> request('color(s)'),
        'author'=> request('author'),
        'description'=> request('description'),
        'picture'=> request('picture'),
        'minimum_price'=> request('minimum_price'),
        'number_tours'=> request('number_tours'),
        'time'=> request('time'),
        'test_rate'=> request('test_rate'),
        'number_test'=> request('number_test')
    ]);
    return view('artworks/allart');
 });

Route::get('/artworks', 'AllartsController@list');

//////////////Users///////////////
Route::get('/backselfer', 'BackSelferController@index');
// ->middleware('auth');

Route::resource('/admin/users', 'Admin\UsersController');

Route::get('/registr', function () {
    return view('users/registration');
 });
 
// Route::get('/galleries', function () {
//     return view('galleries/galleries');
// });

// Route::get('/rules', function () {
//     return view('rules/rules');
// });




// Route::get('/connexion', function () {
//     return view('users/connectpage');
// });



Route::get('/buyer', function () {
    return view('users/buyer');
 });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
