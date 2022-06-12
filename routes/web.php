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

Route::get('/', function () {
    return view('landingpage.home');
});
Route::get('/home', function () {
    return view('landingpage.home');
});
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::get('/detailpaket', function () {
    return view('landingpage.detailpaket');
});
Route::get('/catalogpaket', function () {
    return view('landingpage.catalogpaket');
});
Route::get('/contact', function () {
    return view('landingpage.contact');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/regis', function () {
    return view('login.regis');
});
Route::get('/homeadmin', function () {
    return view('admin.home');
});
Route::get('/gallery', function () {
    return view('landingpage.gallery');
});
