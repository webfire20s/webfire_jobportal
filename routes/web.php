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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

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
Route::get('/login', [HomeController::class, 'login'])->name('home.login');
// Admin Routes
// Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');


// middleware(['web','admin'])


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/category', [PosterCategoryController::class, 'index']);
    Route::get('/category/add', [PosterCategoryController::class, 'add']);

    // manage poster
    Route::get('/poster', [PosterController::class, 'index']);
    Route::get('/poster/add', [PosterController::class, 'add']);
    Route::post('/poster/store', [PosterController::class, 'store']);
    Route::delete('poster/delete/{id}',[PosterController::class, 'destroy']);
    // manage poster
    

    // manage plan

    Route::get('/plan', [PlanController::class, 'index']);
    Route::get('/plan/add', [PlanController::class, 'add']);
    Route::delete('plan/destroy/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

    Route::post('/plan/store', [PlanController::class, 'store']);

    // manage plan

    // manage user
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/store',[UserController::class,'store']);
    // manager user

    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/transaction/add', [TransactionController::class, 'add']);
});


Route::prefix('user')->group(function (){
    Route::get('/', [UserDashboardController::class, 'index'])->name('user.home');
});


Route::middleware(['web'])->group(function () {
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
});
