<?php

// use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\TablePaketController;
use App\Http\Controllers\landingpage\PaketController;
use App\Http\Controllers\landingpage\DetailPaketController;
use App\Http\Controllers\landingpage\galleryPageController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\TableBookingController;
use App\Http\Controllers\admin\tableDetailController;
use App\Http\Controllers\admin\TablePetugasController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\landingpage\BookingController;
use App\Http\Controllers\MultiUser;
// use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/', function () {
//     return view('landingpage.home');
// });

Route::get('/', [MultiUser::class, 'index']);
Route::view('/login-landing', 'login.login')->name('landing-login');
Route::view('/login-register', 'login.regis')->name('landing-register');


Route::get('/catalog-paket', [PaketController::class, 'index'])->name('catalogPaket');
Route::get('/gallery', [galleryPageController::class, 'index'])->name('gallery');
Route::get('/paket-detail/{id}', [DetailPaketController::class, 'index'])->name('paketDetail');
Route::post('/detail', [DetailPaketController::class, 'show'])->name('getDetail');

// ketika sudah login maka bisa mengakses fitur yang ada di dalam middleware
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/booking-store', [BookingController::class, 'store'])->name('booking-store');
    Route::post('/booking-update/{id}', [BookingController::class, 'update'])->name('booking-update');
    Route::get('/booking-delete/{id}', [TableBookingController::class, 'destroy']);

    Route::resource('tabel-booking', TableBookingController::class);
    Route::resource('tabel-paket', TablePaketController::class);
    Route::get('/paket-delete/{id}', [TablePaketController::class, 'destroy']);
    Route::get('paket-pdf', [TablePaketController::class, 'generatePDF']);
});
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('table-paketdetail', tableDetailController::class);
    Route::get('/detail-delete/{id}', [tableDetailController::class, 'destroy']);
});
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('table-gallery', GalleryController::class);
    Route::get('/gallery-delete/{id}', [GalleryController::class, 'destroy']);

    Route::resource('table-petugas', TablePetugasController::class);
    Route::get('/petugas-delete/{id}', [TablePetugasController::class, 'destroy']);
});
Route::get('/home', function () {
    return view('landingpage.home');
})->name('beranda');

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

Route::get('/regis', function () {
    return view('login.regis');
});


Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');
