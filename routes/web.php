<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
})->name('login_form');

Route::get('/landing-page', [UserController::class, 'tampilLanding'])->name('landing_page');
Route::post('/login', [UserController::class, 'LoginAuth'])->name('login');
Route::get('/loginOut', [UserController::class, 'tampilLogin'])->name('loginOut');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::prefix('kelola-akun')->name('kelola_akun.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('data');
    Route::get('/tambah', [UserController::class, 'create'])->name('tambah');
    Route::post('/tambah', [UserController::class, 'store'])->name('tambah.proses');
    Route::get('/ubah/{id}', [UserController::class, 'edit'])->name('ubah');
    Route::patch('/ubah/{id}', [UserController::class, 'update'])->name('ubah.proses');
    Route::delete('/hapus/{id}', [UserController::class, 'destroy'])->name('hapus');
});