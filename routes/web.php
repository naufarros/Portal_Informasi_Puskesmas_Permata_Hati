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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
