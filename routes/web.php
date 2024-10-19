<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Controller;



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
Route::get('/login', [HomeController::class,'login'])->name('home.login');
// Admin Routes
// Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');



Route::prefix('admin')->group(function () {


    Route::get('/',[AdminController::class,'index'])->name('admin.index');

    Route::get('/category',[PosterCategoryController::class,'index']);

    Route::get('/login', [AdminController::class,'login'])->name('admin.login');
    // More admin routes can go here...
});