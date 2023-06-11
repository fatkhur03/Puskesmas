<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
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
Route::get('/pasien', [PasienController::class, 'index']);

//untuk menampilkan Form tambah
Route::get('/pasien/create', [PasienController::class, 'create']);

//root untuk memproses tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);





//untuk menampilkan data Dokter
Route::get('/dokter', [DokterController::class, 'index']);

//untuk menampilkan Form tambah
Route::get('/dokter/create', [DokterController::class, 'create']);

//root untuk memproses tambah dokter
Route::post('/dokter', [DokterController::class, 'store']);

//Route untuk menghapus data pasine
Route::delete('/pasien', [PasienController::class, 'destroy']);

//Route untuk menampilkan dashboard
Route::get('/', [DashboardController::class, 'index']);



//Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

//Route untukuntuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update']);



//Route untuk menampilkan form edit Dokter
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);

//Route untukuntuk memproses form edit Dokter
Route::put('/dokter/{id}', [DokterController::class, 'update']);

