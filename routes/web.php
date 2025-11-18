<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use App\Models\prodi;
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

Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');

//Fakultas 
Route::get('/fakultas', [FakultasController::class,'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class,'create'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class,'store'])->name('fakultas.store');
Route::get('/fakultas/edit/{id}', [FakultasController::class,'edit'])->name('fakultas.edit');
Route::post('/fakultas/update/{id}', [FakultasController::class,'update'])->name('fakultas.update');
Route::get('/fakultas/hapus/{id}', [FakultasController::class,'destroy'])->name('fakultas.hapus');


//prodi
Route::get('/prodi', [ProdiController::class,'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class,'create'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class,'store'])->name('prodi.store');
Route::get('/prodi/edit/{id}', [ProdiController::class,'edit'])->name('prodi.edit');
Route::post('/prodi/update/{id}', [ProdiController::class,'update'])->name('prodi.update');
Route::get('/prodi/hapus/{id}', [ProdiController::class,'destroy'])->name('prodi.hapus');


//Dosen
Route::get('/prodi', [DosenController::class,'index'])->name('dosen.index');
Route::get('/prodi/create', [DosenController::class,'create'])->name('dosen.create');
Route::post('/prodi/store', [DosenController::class,'store'])->name('dosen.store');
Route::get('/prodi/edit/{id}', [DosenController::class,'edit'])->name('dosen.edit');
Route::post('/prodi/update/{id}', [DosenController::class,'update'])->name('dosen.update');
Route::get('/prodi/hapus/{id}', [DosenController::class,'destroy'])->name('dosen.hapus');

//Mahasiswa
Route::get('/prodi', [MahasiswaController::class,'index'])->name('mahasiswa.index');
Route::get('/prodi/create', [MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/prodi/store', [MahasiswaController::class,'store'])->name('mahasiswa.store');
Route::get('/prodi/edit/{id}', [MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::post('/prodi/update/{id}', [MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::get('/prodi/hapus/{id}', [MahasiswaController::class,'destroy'])->name('mahasiswa.hapus');



Route::get('/profil', function () {
    return view('profil');
});

Route::get('/data', function () {
    return view('data');
});

route::get('/register', [AuthController::class, 'formRegister'])->name('register');
route::post('/pos-register', [AuthController::class, 'post'])->name('post');