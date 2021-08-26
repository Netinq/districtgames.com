<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/check', [AdminController::class, 'check'])->name('admin.check');
