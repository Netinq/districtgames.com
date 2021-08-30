<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TarifController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ AdminController::class, 'index'])->name('admin.index');
Route::get('/news', [AdminController::class, 'news'])->name('admin.news');
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/check', [AdminController::class, 'check'])->name('admin.check');
Route::get('/tarifs', [TarifController::class, 'index'])->name('admin.tarifs');

Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::delete('/portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');

Route::post('/categorie', [PortfolioController::class, 'store_category'])->name('category.store');
Route::delete('/categorie/delete/{id}', [PortfolioController::class, 'delete_category'])->name('category.delete');

Route::post('/news', [NewsController::class, 'store'])-> name('news.store');
Route::delete('/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');

Route::post('/tarifs', [TarifController::class, 'store'])->name('tarif.store');
