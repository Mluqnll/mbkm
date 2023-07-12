<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\WebController;
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
Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::resource('/', AdminController::class);
        Route::resource('mahasiswa', MahasiswaController::class);
        Route::resource('nilai', NilaiController::class);
        Route::resource('user', UserController::class);
    });
});

//Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


//opsion nama
Route::get('cek-Nama/{id}', [NilaiController::class, 'cekNama']);

//web
Route::resource('/', WebController::class);
