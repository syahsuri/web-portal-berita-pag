<?php

use App\Http\Controllers\albumController;
use App\Http\Controllers\beritafungsiController;
use App\Http\Controllers\broadcastController;
use App\Http\Controllers\carouselPageController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailspageController;
use App\Http\Controllers\documentManagementController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\insertberitaController;
use App\Http\Controllers\insertPhotoController;
use App\Http\Controllers\insertvideosController;
use App\Http\Controllers\internalbroadcastController;
use App\Http\Controllers\livebroadcastController;
use App\Http\Controllers\loginController;
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
    return redirect()->route('homepage');
});

Route::get('/carousel-page', [carouselPageController::class, 'index'])->name('carouselpage');

Route::prefix('/homepage')->group(function () {
    Route::get('/', [homepageController::class, 'index'])->name('homepage');
    Route::get('/detailberita/{slug}', [detailspageController::class, 'index'])->name('detailsberita');
    Route::get('/beritafungsi/{id}', [beritafungsiController::class, 'index'])->name('division.beritafungsi');
    Route::get('/albumfoto', [PhotoController::class, 'index'])->name('albumphoto');
    Route::get('/photopage/{id}', [PhotoController::class, 'showphotobyindex'])->name('photopage');
    Route::get('/video', [videoController::class, 'index'])->name('video');
    Route::get('/documentManagement', [documentManagementController::class, 'index'])->name('documentmanagement');
    Route::get('/internalbroadcast', [internalbroadcastController::class, 'index'])->name('internalbroadcast');
});

Route::prefix('/dashboard')->group(function () {
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
    Route::post('/editbroadcast{id}', [broadcastController::class, 'update'])->name('editbroadcast.update');

    Route::get('/insertlivebroadcast', [livebroadcastController::class, 'index'])->name('insertlivebroadcast');
    Route::delete('/insertlivebroadcast/{id}', [livebroadcastController::class, 'destroy'])->name('insertlivebroadcast.destroy');
    Route::post('/insertlivebroadcast', [livebroadcastController::class, 'store'])->name('insertlivebroadcast.store');
    Route::post('/editlivebroadcast{id}', [livebroadcastController::class, 'update'])->name('editlivebroadcast.update');
    Route::post('/live_broadcasts/{id}/toggle', [livebroadcastController::class, 'toggle'])->name('live_broadcasts.toggle');

    Route::get('/insertalbum', [albumController::class, 'index'])->name('addalbum');
    Route::post('/insertalbum', [albumController::class, 'store'])->name('insertalbum.store');
    Route::delete('/insertalbum/{id}', [albumController::class, 'destroy'])->name('insertalbum.destroy');
    Route::post('/editalbum/{id}', [albumController::class, 'update'])->name('editalbum.update');

    Route::get('/insertphoto', [insertPhotoController::class, 'index'])->name('insertphoto');
    Route::post('/insertphoto', [insertPhotoController::class, 'store'])->name('insertphoto.store');
    Route::delete('/insertphoto/{id}', [insertPhotoController::class, 'destroy'])->name('insertphoto.destroy');
    Route::post('/editaphoto/{id}', [insertPhotoController::class, 'update'])->name('editaphoto.update');


});

Route::get('/login', [loginController::class,'index'])->name('login');

Route::get('/get-thumbnail', [insertberitaController::class, 'getThumbnail']);
