<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
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
    return view('pages.home');
});

// Route::get('home', function () {
//     return view('pages.home');
// });


// HOME

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home.view');

// BARANG

Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('barang/edit/{barang_id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('barang/update/{barang_id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('barang/show/{barang_id}', [BarangController::class, 'show'])->name('barang.show');
Route::delete('barang/destroy/{barang_id}', [BarangController::class, 'destroy'])->name('barang.destroy');


// PELANGGAN

Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('pelanggan/edit/{pelanggan_id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('pelanggan/update/{pelanggan_id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::get('pelanggan/show/{pelanggan_id}', [PelangganController::class, 'show'])->name('pelanggan.show');
Route::delete('pelanggan/destroy/{pelanggan_id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
