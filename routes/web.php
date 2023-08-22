<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;

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


Route::resource('/', LoginController::class);
Route::resource('login', LoginController::class)->name('index', 'login');
Route::resource('logout', LogoutController::class);

Route::resource('home', HomeController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::resource('siswa', SiswaController::class);
Route::resource('kriteria', KriteriaController::class);
Route::resource('sub', SubController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('proses', ProsesController::class);
Route::resource('laporan', LaporanController::class);
route::resource('profile', ProfileController::class);
// Route::resource('profile', ProfileController::class);

// Route::get('addsub/{kode_id}', [SubController::class, 'add']);
// Route::get('showsub/{kode_id}', [KriteriaController::class, 'showsub']);
// Route::post('simpansub/{kode_id}', [SubController::class, 'save']);