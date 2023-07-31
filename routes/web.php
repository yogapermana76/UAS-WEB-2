<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataHargaSampahController;
use App\Http\Controllers\RiwayatTransaksiNasabahController;
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

Route::resource('data-harga-sampah', DataHargaSampahController::class);
Route::resource('riwayat-transaksi-nasabah', RiwayatTransaksiNasabahController::class);

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/data-harga-sampah/create', [DataHargaSampahController::class, 'create'])->name('data-harga-sampah.create');
Route::get('/data-harga-sampah', [DataHargaSampahController::class, 'index'])->name('data-harga-sampah.index');
Route::get('/data-harga-sampah/{id}/edit', [DataHargaSampahController::class, 'edit'])->name('data-harga-sampah.edit');
Route::get('/riwayat-transaksi-nasabah/create', [RiwayatTransaksiNasabahController::class, 'create'])->name('riwayat-transaksi-nasabah.create');

Route::delete('/data-harga-sampah/{id}', [DataHargaSampahController::class, 'destroy'])->name('data-harga-sampah.destroy');

// Route::get('/', function () {
//     return view('index');
// });
