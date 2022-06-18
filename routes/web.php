<?php

// use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\TablePaketController;
use App\Http\Controllers\landingpage\PaketController;
use App\Http\Controllers\landingpage\DetailPaketController;
use App\Http\Controllers\ImageUploadController;

>>>>>>> c95bec5ae1afb027a28ee6be1b160104badcdbe2
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
Route::get('/paket-detail/{id}', [DetailPaketController::class, 'index'])->name('paketDetail');
Route::post('/detail', [DetailPaketController::class, 'show'])->name('getDetail');


// ketika sudah login maka bisa mengakses fitur yang ada di dalam middleware
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('tabel-paket', TablePaketController::class);
});
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('tabel-paketdetail', DetailPaketController::class);
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

Route::get('/gallery', function () {
    return view('landingpage.gallery');
});

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');
