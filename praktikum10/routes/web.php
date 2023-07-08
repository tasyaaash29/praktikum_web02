<?php

// panggil Dashboard Controller

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\ViewController;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/',[TampilanController::class, 'index']);
Route::get('/view',[ViewController::class, 'index']);

// Bungkus dengan route group
Route::group(['middleware' => ['auth']], function () {
// Bikin routing untuk dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

// Bikin routing untuk home pake controller
Route::get('/landingpage', [LandingpageController::class, 'index']);

// bikin routing crud
Route::get('/produk/create', [ProdukController::class, 'create']);
// bikin routing untuk kirim data menggunakan store
Route::post('/produk/store', [ProdukController::class, 'store']);

// bikin routing untuk edit
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

// bikin routing untuk edit data menggunkan update
Route::put('produk/update/{id}', [ProdukController::class, 'update']);

// Bikin routing umtuk delete data menggunakan destory
Route::get('produk/delete/{id}', [ProdukController::class, 'destroy']);

// Bikin routing untuk kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('Kategori');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Buat route untuk peran admin dan manager
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
});
});
// Buat route untuk after_registrasi
Route::get('/after_register', function () {
    return view('after_register');
});

