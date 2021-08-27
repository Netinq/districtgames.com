<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ MainController::class, 'home'])->name('home');
Route::get('/infos', [MainController::class, 'infos'])->name('infos');
Route::get('/legal', [MainController::class, 'legal'])->name('legal');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');

Route::get('/portfolio{portfolio?}/{category?}', [PortfolioController::class, 'index'])->name('portfolio');

// ================== //
//    IMAGES ROUTE    //
// ================== //
Route::get('/image/fetch/{id}', [ImageController::class, 'fetch'])->name('image.fetch');
Route::get('/image/fetch_little/{id}', [ImageController::class, 'fetch_little'])->name('image.fetch_little');
