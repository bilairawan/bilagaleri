<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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
Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/foto', [FotoController::class, 'index'])->name('foto');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/kebijakan', [KebijakanController::class, 'index'])->name('kebijakan');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');