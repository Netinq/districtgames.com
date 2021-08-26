<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ MainController::class, 'home'])->name('home');
Route::get('/infos', [MainController::class, 'infos'])->name('infos');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/legal', [MainController::class, 'legal'])->name('legal');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
