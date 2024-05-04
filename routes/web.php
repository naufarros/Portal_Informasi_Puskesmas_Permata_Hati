<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', 'PageController@index')->name('page.index');
    Route::get('/hubungi', 'PageController@hubungi')->name('page.hubungi');
    Route::get('/galeri', 'PageController@galeri')->name('page.galeri');
    Route::get('/layanan', 'PageController@layanan')->name('page.pelayanan');
    Route::get('/alur', 'PageController@alur')->name('page.alur');
    Route::get('/poliumum', 'PageController@poliumum')->name('page.poliumum');
    Route::get('/poligigi', 'PageController@poligigi')->name('page.poligigi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
