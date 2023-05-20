<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailspageController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\insertberitaController;
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



Route::prefix('/homepage')->group(function() {
    Route::get('/', [homepageController::class, 'index'])->name('homepage');
    Route::get('/detailberita/{slug}', [detailspageController::class, 'index'])->name('detailsberita');
    Route::get('/foto', [photoController::class, 'index'])->name('foto');
    Route::get('/video', [videoController::class, 'index'])->name('video');
});

Route::prefix('/dashboard')->group(function() {
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/insertberita', [insertberitaController::class, 'index'])->name('insertberita');
    Route::delete('/insertberita/{id}', [insertberitaController::class, 'destroy'])->name('insertberita.destroy');
    Route::get('/createberita', [insertberitaController::class, 'create'])->name('createberita');
    Route::post('/createberita', [insertberitaController::class, 'store'])->name('createberita.store');
    Route::get('/editberita{id}', [insertberitaController::class, 'edit'])->name('editberita');
    Route::post('/editberita{id}', [insertberitaController::class, 'update'])->name('editberita.update');
});

