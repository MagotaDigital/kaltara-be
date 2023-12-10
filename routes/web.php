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
// Progam Unggulan

// Selayang Pandang
Route::get('/selayang-pandang', [Controllers\SelayangpandangController::class, 'index']);

// kalender event
Route::get('/kalender-event', [Controllers\SelayangpandangController::class, 'kalender']);
