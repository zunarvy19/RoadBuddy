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
}) -> name('user.dashboard');


Route::get('/user/jenis-bbm', [JenisBBMController::class, 'index'])->name('user.jenis_bbm.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user/calculate', [CalculateController::class, 'index'])->name('user.calculate.index');

Route::get('/user/tutorial', [HomeController::class, 'index'])-> name('user.home.index');

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('user.admin.index');




require __DIR__.'/auth.php';
