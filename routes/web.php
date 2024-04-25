<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\CreatefotoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('/photo', function () {
    return view('photo');
});

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda')->middleware('auth');
Route::get('create', [CreatefotoController::class, 'index'])->name('pages.createfoto');
Route::get('foto', [PhotoController::class, 'index'])->name('foto');
Route::post('pages.foto', [FotoController::class, 'upload'])->name('pages.foto');
Route::get('album', [AlbumController::class, 'hal'])->name('album');
Route::get('createalbum', [AlbumController::class, 'index'])->name('createalbum');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::post('foto', [KomentarController::class, 'store'])->name('komentar.store');
Route::get('/kebijakan', [KebijakanController::class, 'index'])->name('kebijakan');
Route::get('/register', [RegisterController::class, 'index'])->name('Register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
