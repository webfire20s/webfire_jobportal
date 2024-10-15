<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\TransactionController;


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

Route::get('/', [HomeController::class,'index'])->name('home.index');

// Admin routes - Only accessible by users with role 'admin'
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/posters', 'PosterController');
    Route::get('/admin/transactions', 'TransactionController@index');
    Route::post('/admin/transactions/{transaction}/approve', 'TransactionController@approve');
});

// User routes - Only accessible by users with role 'user'
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
});
Route::post('/login', [HomeController::class,'login'])->name('home.login');
