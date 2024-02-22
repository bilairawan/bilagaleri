<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\BerandaController;
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
Route::get('beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/foto', [FotoController::class, 'index'])->name('galeri.foto');


// Route::get('/', function () {
//     return view('dashboard');
//  })->name('dashboard');

//  Route::get('/', function () {
//     return view('foto');
//  })->name('foto');
