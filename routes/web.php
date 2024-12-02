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
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\LatestNewController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FormController;




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

    // Route for dynamic public page
    Route::get('/page/{slug}', [HomeController::class, 'showPublicPage'])->name('page.show');

    // Admin Login and Logout Routes
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/api/admin/login', [AdminController::class, 'do_login'])->name('admin.do_login');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('latest-news/{id}', [UserDashboardController::class, 'latest_news_details'])->name('latest_news.show');
    Route::get('test', [HomeController::class, 'test'])->name('test');
});

// Admin Routes - Restricted to authenticated users with the 'admin' role
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Admin Dashboard Route
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Category Management Routes
    Route::get('category', [PosterCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('category/create', [PosterCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category', [PosterCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/{id}', [PosterCategoryController::class, 'show'])->name('admin.category.show');
    Route::get('category/{id}/edit', [PosterCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('category/{id}', [PosterCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('category/{id}', [PosterCategoryController::class, 'destroy'])->name('admin.category.destroy');

    // Poster Management Routes
    Route::get('/poster', [PosterController::class, 'index'])->name('admin.poster.index');
    Route::get('/poster/add', [PosterController::class, 'add']);
    Route::post('/poster/store', [PosterController::class, 'store']);
    Route::get('/poster/edit/{id}', [PosterController::class, 'edit']);
    Route::put('/poster/update/{id}', [PosterController::class, 'update'])->name('admin.poster.update');
    Route::delete('/poster/delete/{id}', [PosterController::class, 'destroy'])->name('poster.destroy');


    // Plan Management Routes
    Route::get('/plan', [PlanController::class, 'index'])->name('admin.plan.index');
    Route::get('/plan/add', [PlanController::class, 'add']);
    Route::post('/plan/store', [PlanController::class, 'store']);
    Route::get('/plan/edit/{id}', [PlanController::class, 'edit'])->name('admin.plan.edit');
    Route::put('/plan/update/{id}', [PlanController::class, 'update'])->name('admin.plan.update');
    Route::delete('/plan/destroy/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

    // User Management Routes
    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
    Route::put('/user/update/{id}',[UserController::class,'update'])->name('admin.user.update');
    Route::delete('/user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');
    Route::post('/user/toggle-status/{id}', [UserController::class, 'toggleStatus'])->name('admin.user.toggleStatus');


    // Transaction Management Routes
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/transaction/add', [TransactionController::class, 'add']);
    Route::get('/transactions/{transaction}/approve', [TransactionController::class, 'approve'])->name('transaction.approve');
    Route::get('/transactions/{transaction}/reject', [TransactionController::class, 'reject'])->name('transaction.reject');

    // manage pages
    Route::resource('pages', PageController::class);

    // Admin Settings Routes
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('admin.settings.update');
    Route::post('/settings/change-password', [SettingsController::class, 'changePassword'])->name('admin.settings.changePassword');
    Route::get('/settings/notices', [SettingsController::class, 'showNotices'])->name('admin.settings.notices');
    Route::post('/settings/notices/update', [SettingsController::class, 'updateNotice'])->name('admin.settings.updateNotice');

    // latest news
    Route::get('latest_news', [LatestNewController::class, 'index'])->name('admin.latest_news.index');
    // Show the form to create new latest news
    Route::get('latest_news/create', [LatestNewController::class, 'create'])->name('admin.latest_news.create');
    // Store new latest news
    Route::post('latest_news', [LatestNewController::class, 'store'])->name('admin.latest_news.store');
    // Show the form to edit an existing latest news
    Route::get('latest_news/{id}/edit', [LatestNewController::class, 'edit'])->name('admin.latest_news.edit');
    // Update an existing latest news
    Route::put('latest_news/{id}', [LatestNewController::class, 'update'])->name('admin.latest_news.update'); 
    // Delete an existing latest news
    Route::delete('latest_news/{id}', [LatestNewController::class, 'destroy'])->name('admin.latest_news.destroy');
    
    Route::get('slider', [SliderController::class, 'index'])->name('admin.slider.index');
    Route::get('slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
    Route::post('slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
    Route::put('slider/update/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
    Route::delete('slider/destroy/{id}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');


    Route::resource('forms', FormController::class);



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
    Route::post('/plans/upload-receipt/{transactionId}', [UserPlanController::class, 'uploadReceipt'])->name('user.plan.uploadReceipt');
    Route::get('/profile', [UserDashboardController::class, 'profile'])->name('user.profile');
    Route::post('/profile/update', [UserDashboardController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('/change-password', [UserDashboardController::class, 'changePassword'])->name('user.changePassword');
    Route::post('/change-password', [UserDashboardController::class, 'updatePassword'])->name('user.updatePassword');
    
    Route::get('/forms', [UserDashboardController::class, 'form_list'])->name('user.form_list');
});
