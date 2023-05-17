<?php

use App\Http\Controllers\PasienController;
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

Route::get('/', function () {
    return view('welcome');
});

//untuk menampilkan data pasien
Route::get('/pasien', [PasienController::class, 'index']);

//untuk menampilkan Form tambah
Route::get('/pasien/create', [PasienController::class, 'create']);

//root untuk memproses tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);