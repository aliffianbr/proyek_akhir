<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matkulController;
use App\Http\Controllers\registerController;
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
//     return view('kerangka.master');
// });

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [loginController::class, 'login'])->name('login.store');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');

// Ganti password
Route::get('/resetpassword', [loginController::class, 'changepassword'])->name('pass.index');
Route::post('/resetpassword', [loginController::class, 'processchangepassword'])->name('pass.process');


// mahasiswa
Route::get('/data-mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/create-mahasiswa', [mahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [mahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/mahasiswas/{mahasiswa}/edit', [mahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswas/{mahasiswa}/update', [mahasiswaController::class, 'update'])->name('mahasiswa.update');

Route::delete('/mahasiswa/{mahasiswa}', [mahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Dosen

Route::get('/data-dosen', [dosenController::class, 'index'])->name('dosen.index');
Route::get('/create-dosen', [dosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [dosenController::class, 'store'])->name('dosen.store');

Route::get('/dosen/{dosen}/edit', [dosenController::class, 'edit'])->name('dosen.edit');
Route::post('/dosen/{dosen}/update', [dosenController::class, 'update'])->name('dosen.update');

Route::delete('/dosen/{dosen}', [dosenController::class, 'destroy'])->name('dosen.destroy');

// MatKul

Route::get('/data-matkul', [matkulController::class, 'index'])->name('matkul.index');
Route::get('/create-matkul', [matkulController::class, 'create'])->name('matkul.create');
Route::post('/matkul', [matkulController::class, 'store'])->name('matkul.store');

Route::get('/matkul/{matkul}/edit', [matkulController::class, 'edit'])->name('matkul.edit');
Route::post('/matkul/{matkul}/update', [matkulController::class, 'update'])->name('matkul.update');

Route::delete('/matkul/{matkul}', [matkulController::class, 'destroy'])->name('matkul.destroy');