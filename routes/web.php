<?php

use App\Http\Controllers\broadcastController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailspageController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\insertberitaController;
use App\Http\Controllers\insertvideosController;
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
});

Route::prefix('/dashboard')->group(function() {
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('/insertberita', [insertberitaController::class, 'index'])->name('insertberita');
    Route::delete('/insertberita/{id}', [insertberitaController::class, 'destroy'])->name('insertberita.destroy');
    Route::get('/createberita', [insertberitaController::class, 'create'])->name('createberita');
    Route::post('/createberita', [insertberitaController::class, 'store'])->name('createberita.store');
    Route::get('/editberita{id}', [insertberitaController::class, 'edit'])->name('editberita');
    Route::post('/editberita{id}', [insertberitaController::class, 'update'])->name('editberita.update');

    Route::put('/insertopnews{headnewspage}', [insertberitaController::class, 'topnews'])->name('insertberita.topnews');

    Route::get('/insertvideos', [insertvideosController::class, 'index'])->name('insertvideos');
    Route::delete('/insertvideos/{id}', [insertvideosController::class, 'destroy'])->name('insertvideos.destroy');
    Route::get('/createvideos', [insertvideosController::class, 'create'])->name('createvideos');
    Route::post('/createvideos', [insertvideosController::class, 'store'])->name('createvideos.store');
    Route::get('/editvideos{id}', [insertvideosController::class, 'edit'])->name('editvideos');
    Route::post('/editvideos{id}', [insertvideosController::class, 'update'])->name('editvideos.update');

    Route::get('/insertbroadcast', [broadcastController::class, 'index'])->name('insertbroadcast');
    Route::delete('/insertbroadcast/{id}', [broadcastController::class, 'destroy'])->name('insertbroadcast.destroy');
    Route::get('/createbroadcast', [broadcastController::class, 'create'])->name('createbroadcast');
    Route::post('/insertbroadcast', [broadcastController::class, 'store'])->name('insertbroadcast.store');
    Route::get('/editvideos{id}', [broadcastController::class, 'edit'])->name('editvideos');
    Route::post('/editvideos{id}', [broadcastController::class, 'update'])->name('editvideos.update');

});

Route::get('/get-thumbnail',[insertberitaController::class, 'getThumbnail']);
