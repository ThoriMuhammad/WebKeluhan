<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//  Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/keluhan', function () {
    return view('keluhan');
});
Route::resource('keluhans', KeluhanController::class);

Route::middleware('auth')->group(function () {
Route::get('/keluhan-proses', [KeluhanController::class, 'store'])->name('proses.keluhan');
Route::get('/data-keluhan', [KeluhanController::class, 'index'])->name('index.keluhan');
Route::get('/', [KeluhanController::class, 'dashboard'])->name('dashboard.keluhan');
Route::get('/ubah-keluhan/{id}', [KeluhanController::class, 'edit'])->name('edit.keluhan');
Route::put('/update-keluhan/{id}', [KeluhanController::class, 'update'])->name('keluhans.update');
Route::delete('/delete-keluhan/{id}', [KeluhanController::class, 'destroy'])->name('keluhan.destroy');
Route::get('/dashboard-admin', [KeluhanController::class, 'dashboardAdmin'])->name('dashboard.admin');
Route::patch('/update-status/{id}', [KeluhanController::class, 'updateStatus'])->name('update.status');


});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::put('/update-admin/{id}', [KeluhanController::class, 'updateAdmin'])->name('update.admin');
