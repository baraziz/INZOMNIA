<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('customer.homePage');
    // return view('welcome');
});

Route::resource('admin/produk', ProdukController::class)->parameters([
    'produk' => 'barang'
]);//->middleware(['auth', 'admin']);

Route::controller(LoginController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
    });
    Route::post('/logout', 'toLogout')->middleware('auth');
});

Route::get('/home', function () {
    return view('customer.homePage');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::controller(PakaianController::class)->group(function () {
        Route::get('/pria', 'pria');
        Route::get('/wanita', 'wanita');
    });
});


// nopal

Route::get('/homePage', function () {
    return view('homePage');
});
Route::get('/regis', function () {
    return view('regis');
});

Route::get('/aboutUs', function () {
    return view('aboutUs', []);
});

Route::get('/wanita', function () {
    return view('waniTa', ['gender' => 'Wanita']);
});

Route::get('/pria', function () {
    return view('pria', ['gender' => 'Pria']);
});

Route::get('/contactUs', function () {
    return view('contactUs', ['contact' => 'contactus']);
});

Route::get('/detailProduk', function () {
    return view('detailProduk');
});
Route::get('/cekout', function () {
    return view('cekout');
});

Route::get('/sesi' , [SessionController::class, 'index']);
Route::post('/sesi/login' , [SessionController::class, 'loginPage']);

