<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cartController;

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

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/HistoriTransaksi', function () {
    return view('HistoriTransaksi');
});

Route::get('/detailtransaksi', function () {
    return view('DetailTransaksi');
});

Auth::routes();

Route::get('histori', [transactionController::class,'history']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('transaksi',transactionController::class);
Route::resource('item',itemController::class);
Route::get('item/{id}/hapus',[itemController::class,'hapus'])->name('item.hapus');
Route::resource('kategori',categoriesController::class);
Route::get('kategori/{id}/hapus',[categoriesController::class,'hapus'])->name('kategori.hapus');
// route::post('transaksi/checkout',[transactionController::class,'checkout'])->name('transaksi.checkout');

