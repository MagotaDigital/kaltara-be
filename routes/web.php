<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Home
Route::get('/', [Controllers\HomeController::class, 'index']);
// Berita
Route::get('/berita', [Controllers\BeritaController::class, 'index']);
Route::get('/berita/{slug}', [Controllers\BeritaController::class, 'detailBerita']);
// Layanan publik
Route::get('/layanan-publik', [Controllers\LayananPublikController::class, 'index']);
Route::get('/layanan-publik/{slug}', [Controllers\LayananPublikController::class, 'detailLayananPublik']);
// Program Unggulan
Route::get('/program-unggulan', [Controllers\ProgramUnggulanController::class, 'index']);
// Selayang Pandang
Route::get('/selayang-pandang', [Controllers\SelayangpandangController::class, 'index']);
// Tentang
Route::get('/tentang', [Controllers\TentangController::class, 'index']);
// Arsip Dokumen
Route::get('/arsip-dokumen', [Controllers\ArsipDokumenController::class, 'index']);
// kalender event
// Route::get('/kalender-event', [Controllers\SelayangpandangController::class, 'kalender']);
