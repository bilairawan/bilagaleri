<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\PostController;
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
Route::get('/', [BerandaController::class, 'beranda'])->name('beranda')->middleware('auth');
Route::get('/foto', [FotoController::class, 'index'])->name('foto');
Route::post('/foto', [FotoController::class, 'store']);
Route::get('/komentar', [KomentarController::class, 'index'])->name('komentar');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/kebijakan', [KebijakanController::class, 'index'])->name('kebijakan');
Route::get('/post', [PostController::class, 'index'])->name('post');
// Route::post('/post', [PostController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('Register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
