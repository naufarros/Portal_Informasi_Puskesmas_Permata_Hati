<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ArtikelController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', 'PageController@index')->name('page.index');
    Route::get('/hubungi', 'PageController@hubungi')->name('page.hubungi');
    Route::get('/galeri', 'PageController@galeri')->name('page.galeri');
    Route::get('/layanan', 'PageController@layanan')->name('page.pelayanan');
    Route::get('/alur', 'PageController@alur')->name('page.alur');
    Route::get('/poliumum', 'PageController@poliumum')->name('page.poliumum');
    Route::get('/poligigi', 'PageController@poligigi')->name('page.poligigi');
    Route::get('/artikel', 'PageController@artikel')->name('page.artikel');
    Route::get('/grafik', 'PageController@grafik')->name('page.grafik');
    Route::get('/tren', 'PageController@tren')->name('page.tren');
    Route::get('/jumlahtt', 'PageController@jumlahtt')->name('page.jumlahtt');
    Route::get('/gambar/{id}', 'PageController@showImage')->name('gambar.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/{nik}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/{nik}', [PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/{nik}', [PasienController::class, 'destroy'])->name('pasien.destroy');

Route::get('/data-artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/data-artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/data-artikel', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/data-artikel/{artikel}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::put('/data-artikel/{artikel}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::delete('/data-artikel/{artikel}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');