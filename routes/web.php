<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProdiController;

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
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // Rute berhasil login
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Rute untuk Model Dosen
    Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
    Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
    Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
    Route::get('/dosens/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
    Route::get('/dosens/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
    Route::put('/dosens/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
    Route::delete('/dosens/{dosen}', [DosenController::class, 'destroy'])->name('dosens.destroy');

    // Rute untuk Model Mahasiswa
    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
    Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
    Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
    Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
    Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
    Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
    Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

    // Rute untuk Model MataKuliah
    Route::get('/matakuliahs', [MataKuliahController::class, 'index'])->name('matakuliahs.index');
    Route::get('/matakuliahs/create', [MataKuliahController::class, 'create'])->name('matakuliahs.create');
    Route::post('/matakuliahs', [MataKuliahController::class, 'store'])->name('matakuliahs.store');
    Route::get('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'show'])->name('matakuliahs.show');
    Route::get('/matakuliahs/{matakuliah}/edit', [MataKuliahController::class, 'edit'])->name('matakuliahs.edit');
    Route::put('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'update'])->name('matakuliahs.update');
    Route::delete('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'destroy'])->name('matakuliahs.destroy');

    // Rute untuk Model prodi
    Route::get('/prodis', [ProdiController::class, 'index'])->name('prodis.index');
    Route::get('/prodis/create', [ProdiController::class, 'create'])->name('prodis.create');
    Route::post('/prodis', [ProdiController::class, 'store'])->name('prodis.store');
    Route::get('/prodis/{prodi}', [ProdiController::class, 'show'])->name('prodis.show');
    Route::get('/prodis/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodis.edit');
    Route::put('/prodis/{prodi}', [ProdiController::class, 'update'])->name('prodis.update');
    Route::delete('/prodis/{prodi}', [ProdiController::class, 'destroy'])->name('prodis.destroy');
});
