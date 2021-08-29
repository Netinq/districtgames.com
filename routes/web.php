<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ImageNewsController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ MainController::class, 'home'])->name('home');
Route::get('/infos', [MainController::class, 'infos'])->name('infos');
Route::get('/legal', [MainController::class, 'legal'])->name('legal');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/portfolio{portfolio?}/{category?}', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/mail', [MailController::class, 'send'])->name('sendmail');

// ====================== //
//       IMAGES ROUTE     //
// ====================== //
Route::get('/image/fetch/{id}', [ImageController::class, 'fetch'])->name('image.fetch');
Route::get('/image/fetch_little/{id}', [ImageController::class, 'fetch_little'])->name('image.fetch_little');
Route::get('/image/fetch_size/{id}/{size}', [ImageController::class, 'fetch_size'])->name('image.fetch_size');

// ====================== //
//    IMAGES NEWS ROUTE   //
// ====================== //
Route::get('/news/fetch/{id}', [ImageNewsController::class, 'fetch'])->name('news.fetch');
Route::get('/news/fetch_little/{id}', [ImageNewsController::class, 'fetch_little'])->name('news.fetch_little');
Route::get('/news/fetch_size/{id}/{size}', [ImageNewsController::class, 'fetch_size'])->name('news.fetch_size');
