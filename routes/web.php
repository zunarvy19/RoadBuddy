<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisBBMController;
use App\Http\Controllers\ProfileController;
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
    return view('user.dashboard', ['title' => 'Dashboard']);
})->name('user.dashboard');

Route::get('/user/jenis-bbm', [JenisBBMController::class, 'show'])->name('user.jenis_bbm.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::middleware('isAdmin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/admin/data', [AdminController::class, 'show'])->name('admin.data.show');
        Route::get('/admin/pertamina', [AdminController::class, 'pertamina'])->name('pertamina');
        Route::get('/admin/shell', [AdminController::class, 'shell'])->name('shell');
        Route::get('/admin/vivo', [AdminController::class, 'vivo'])->name('vivo');
        Route::get('/admin/bp', [AdminController::class, 'bp'])->name('bp');
        Route::get('/admin/{id}/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/admin/{id}', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    });

    Route::get('/user/dashboard', [HomeController::class, 'home'])->name("home");
    Route::get('/user/history', [CalculateController::class, 'show'])->name('show');
    Route::get('/user/history/print', [CalculateController::class, 'print']);
    Route::delete('/user/history/{calculate}', [CalculateController::class, 'destroy'])->name('user.history.destroy');

});

Route::get('/user/calculate', [CalculateController::class, 'index'])->name('calculate.index');
Route::post('/calculate', [CalculateController::class, 'store'])->name('calculate.store');
Route::get('/user/tutorial', [JenisBBMController::class, 'index'])->name('user.home.index');

require __DIR__ . '/auth.php';
