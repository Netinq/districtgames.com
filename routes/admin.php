<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ AdminController::class, 'index'])->name('admin.index');
Route::get('/news', [AdminController::class, 'news'])->name('admin.news');
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/check', [AdminController::class, 'check'])->name('admin.check');

Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::post('/categorie/store', [PortfolioController::class, 'store_category'])->name('category.store');
