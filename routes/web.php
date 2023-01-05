<?php

use App\Http\Controllers\Daftar_MenuController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'create'])->name('add.plg');
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::post('/pelanggan/{id}/update', [App\Http\Controllers\PelangganController::class, 'update'])->name('update.plg');
Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
Route::post('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'create'])->name('add.pby');
Route::get('/pembayaran/{id_pembayaran}/edit', [App\Http\Controllers\PembayaranController::class, 'edit']);
Route::post('/pembayaran/{id_pembayaran}/update', [App\Http\Controllers\PembayaranController::class, 'update'])->name('update.pby');
Route::get('/pembayaran/delete/{id_pembayaran}', [PembayaranController::class, 'delete']);

Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan', [App\Http\Controllers\PemesananController::class, 'create'])->name('add.pms');
Route::get('/pemesanan/{id_nota}/edit', [App\Http\Controllers\PemesananController::class, 'edit']);
Route::post('/pemesanan/{id_nota}/update', [App\Http\Controllers\PemesananController::class, 'update'])->name('update.pms');
Route::get('/pemesanan/delete/{id_nota}', [PemesananController::class, 'delete']);

Route::get('/daftar_menu', [App\Http\Controllers\Daftar_MenuController::class, 'index'])->name('daftar_menu');
Route::post('/daftar_menu', [App\Http\Controllers\Daftar_MenuController::class, 'create'])->name('add.dm');
Route::get('/daftar_menu/{id}/edit', [App\Http\Controllers\Daftar_MenuController::class, 'edit']);
Route::post('/daftar_menu/{id}/update', [App\Http\Controllers\Daftar_MenuController::class, 'update'])->name('update.dm');
Route::get('/daftar_menu/delete/{id}', [Daftar_MenuController::class, 'delete']);

Route::get('/kasir', [App\Http\Controllers\KasirController::class, 'index'])->name('kasir');
Route::post('/kasir', [App\Http\Controllers\KasirController::class, 'create'])->name('add.ksr');
Route::get('/kasir/{id_kasir}/edit', [App\Http\Controllers\KasirController::class, 'edit']);
Route::post('/kasir/{id_kasir}/update', [App\Http\Controllers\KasirController::class, 'update'])->name('update.ksr');
Route::get('/kasir/delete/{id_kasir}', [KasirController::class, 'delete']);

Route::get('/owner', [App\Http\Controllers\OwnerController::class, 'index'])->name('owner');
Route::post('/owner', [App\Http\Controllers\OwnerController::class, 'create'])->name('add.own');
Route::get('/owner/{id_owner}/edit', [App\Http\Controllers\OwnerController::class, 'edit']);
Route::post('/owner/{id_owner}/update', [App\Http\Controllers\OwnerController::class, 'update'])->name('update.own');
Route::get('/owner/delete/{id_owner}', [OwnerController::class, 'delete']);