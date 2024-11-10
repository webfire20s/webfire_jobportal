<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\PosterCategoryController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\User\UserPlanController;



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
// Public Routes - Accessible without authentication
Route::middleware(['web'])->group(function () {
    // Home and Authentication Routes
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/sign_up', [HomeController::class, 'signUpForm'])->name('sign_up.form');
    Route::post('/sign_up', [HomeController::class, 'signUpSubmit'])->name('sign_up.submit');
    Route::post('/login', [HomeController::class, 'login'])->name('home.login');
    Route::get('/logout', [HomeController::class, 'logout'])->name('home.logout');

    // Admin Login and Logout Routes
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/api/admin/login', [AdminController::class, 'do_login'])->name('admin.do_login');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

// Admin Routes - Restricted to authenticated users with the 'admin' role
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Admin Dashboard Route
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Category Management Routes
    Route::get('/category', [PosterCategoryController::class, 'index']);
    Route::get('/category/add', [PosterCategoryController::class, 'add']);

    // Poster Management Routes
    Route::get('/poster', [PosterController::class, 'index']);
    Route::get('/poster/add', [PosterController::class, 'add']);
    Route::post('/poster/store', [PosterController::class, 'store']);
    Route::delete('/poster/delete/{id}', [PosterController::class, 'destroy']);

    // Plan Management Routes
    Route::get('/plan', [PlanController::class, 'index']);
    Route::get('/plan/add', [PlanController::class, 'add']);
    Route::post('/plan/store', [PlanController::class, 'store']);
    Route::delete('/plan/destroy/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

    // User Management Routes
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/store', [UserController::class, 'store']);

    // Transaction Management Routes
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/transaction/add', [TransactionController::class, 'add']);
    Route::post('/transactions/{transaction}/approve', [TransactionController::class, 'approve']);
    
    // manage pages
    Route::resource('pages', PageController::class);
});

// User Routes - Restricted to authenticated users with the 'user' role
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    // User Dashboard Route
    Route::middleware('check.plan')->group(function () {
        Route::get('/', [UserDashboardController::class, 'index'])->name('user.home');
        Route::get('/poster_detail/{id}', [UserDashboardController::class, 'show'])->name('poster.detail');
    });
    Route::get('/plans', [UserPlanController::class, 'index'])->name('plans.page');
    Route::post('/plans/purchase/{planId}', [UserPlanController::class, 'purchase'])->name('user.plan.purchase');

    // Route to handle receipt upload after payment
    Route::post('/plans/upload-receipt/{transactionId}', [UserPlanController::class, 'uploadReceipt'])->name('user.plan.uploadReceipt');});
