<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TamuController;
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

// Routes for Tamu
Route::get('/tamu/create', [TamuController::class, 'create'])->name('tamu.create');
Route::post('/tamu/store', [TamuController::class, 'store'])->name('tamu.store');
Route::get('/tamu', [TamuController::class, 'index'])->name('tamu.index');

// Routes for Admin
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/tamus', [AdminController::class, 'viewTamus'])->name('admin.tamus');

