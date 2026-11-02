<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PencapaianController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\RekrutmenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HubungiKamiController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/data/{tableName?}', [DataController::class, 'index'])->name('data.index');
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
Route::get('/visi-misi-motto', [VisiMisiController::class, 'index'])->name('visi-misi.index');
Route::get('/program-unggulan', [ProgramUnggulanController::class, 'index'])->name('program-unggulan.index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/pencapaian', [PencapaianController::class, 'index'])->name('pencapaian.index');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
Route::get('/pendaftaran-siswa', [PendaftaranSiswaController::class, 'index'])->name('pendaftaran-siswa.index');
Route::get('/rekrutmen', [RekrutmenController::class, 'index'])->name('rekrutmen.index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/hubungi-kami', [HubungiKamiController::class, 'index'])->name('hubungi-kami.index');
