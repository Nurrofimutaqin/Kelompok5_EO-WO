<?php

// use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\TablePaketController;
use App\Http\Controllers\landingpage\PaketController;
use App\Http\Controllers\ImageUploadController;
// use App\Http\Controllers\landingpage\HomeController;
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

Route::get('/detail-paket', function () {
    return view('landingpage.detailpaket');
});


Route::get('/catalog-paket', [PaketController::class, 'index'])->name('catalogPaket');

Route::get('/contact', function () {
    return view('landingpage.contact');
});

// Route::get('/login', function () {
//     return view('login.login');
// });

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/regis', function () {
    return view('login.regis');
});

Route::get('/gallery', function () {
    return view('landingpage.gallery');
});

Route::get('/admin', function () {
    return view('admin.home');
});


Route::resource('tabel-paket', TablePaketController::class);
