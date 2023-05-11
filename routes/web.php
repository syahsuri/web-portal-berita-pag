<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailspageController;
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
    Route::get('/detailberita', [detailspageController::class, 'index'])->name('detailsberita');
});

Route::prefix('/dashboard')->group(function() {
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/insertberita', [insertberitaController::class, 'index'])->name('insertberita');
    Route::get('/createberita', [insertberitaController::class, 'store'])->name('createberita');
});

