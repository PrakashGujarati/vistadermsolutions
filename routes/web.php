<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about-us');
});
/*Route::get('features/{id?}', function () {
    return view('features');
});*/

 Route::resource('features', 'FeatureController');


Route::get('pricing', function () {
    return view('pricing');
});


Route::get('contact', function () {
    return view('contact');
});

Route::get('icon', function () {
    return view('layouts.icon');
});


Route::get('blog', function () {
    return view('blog');
});


Route::get('blog_details', function () {
    return view('blog_details');
});



 