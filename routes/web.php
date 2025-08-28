<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/register', 'auth.register')->middleware('guest');
Route::view('/login', 'auth.login')->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::get('/register', [AdminController::class, 'showRegister'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'register']);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::view('/', 'welcome');

require __DIR__.'/auth.php';
