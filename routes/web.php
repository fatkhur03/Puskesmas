<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
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


//untuk menampilkan data pasien
Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');

//untuk menampilkan Form tambah
Route::get('/pasien/create', [PasienController::class, 'create'])->middleware('auth');

//root untuk memproses tambah pasien
Route::post('/pasien', [PasienController::class, 'store'])->middleware('auth');





//untuk menampilkan data Dokter
Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');

//untuk menampilkan Form tambah
Route::get('/dokter/create', [DokterController::class, 'create'])->middleware('auth');

//root untuk memproses tambah dokter
Route::post('/dokter', [DokterController::class, 'store'])->middleware('auth');

//Route untuk menghapus data pasine
Route::delete('/pasien', [PasienController::class, 'destroy'])->middleware('auth');

//Route untuk menampilkan dashboard
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');



//Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->middleware('auth');

//Route untukuntuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update'])->middleware('auth');



//Route untuk menampilkan form edit Dokter
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit'])->middleware('auth');

//Route untukuntuk memproses form edit Dokter
Route::put('/dokter/{id}', [DokterController::class, 'update'])->middleware('auth');



Auth::routes();
