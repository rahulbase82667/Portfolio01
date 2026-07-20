<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Contact\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::patch('/admin/inquiries/{inquiry}/read', [DashboardController::class, 'markAsRead'])->name('inquiries.read');
});