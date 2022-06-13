<?php

use App\Http\Controllers\admin\TablePaketController;
use App\Http\Controllers\landingpage\PaketController;
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

// Route::get('/catalogpaket', function () {
//     return view('landingpage.catalogpaket');
// });
Route::get('/catalog-paket', [PaketController::class, 'index'])->name('catalogPaket');

Route::get('/contact', function () {
    return view('landingpage.contact');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/regis', function () {
    return view('login.regis');
});
<<<<<<< HEAD
Route::get('/booking', function () {
    return view('landingpage.booking');
});
=======
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76

Route::get('/gallery', function () {
    return view('landingpage.gallery');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/tabel-paket', [TablePaketController::class, 'index'])->name('tabelPaket');
Route::resource('tabel-paket', TablePaketController::class);
