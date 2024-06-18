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
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/data', [AdminController::class, 'show'])->name('admin.data.show');

    Route::get('/user/dashboard', [HomeController::class, 'home'])->name("home");
    Route::get('/user/history', [HomeController::class, 'index'])->name("index");
});

Route::get('/user/calculate', [CalculateController::class, 'index'])->name('calculate.index');
Route::post('/calculate', [CalculateController::class, 'store'])->name('calculate.store');
Route::get('/user/tutorial', [JenisBBMController::class, 'index'])->name('user.home.index');



require __DIR__ . '/auth.php';
