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
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu.store');
Route::get('/', [TamuController::class, 'index'])->name('tamu.index');
Route::get('/verifikasi', [TamuController::class, 'verifikasi'])->name('tamu.verifikasi');

// Routes for Admin
// Route untuk akses pertama ke /admin, akan otomatis mengarahkan ke login jika belum login
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/tamu', [AdminController::class, 'viewTamus'])->name('admin.tamu');

Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');

Route::put('admin/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('admin/tamu/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
