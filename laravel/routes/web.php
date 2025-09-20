<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('portfolio.home');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio.projects');
Route::get('/contact', [PageController::class, 'contact'])->name('portfolio.contact');
Route::get('/about', [PageController::class, 'about'])->name('portfolio.about');
Route::get('/experience', [PageController::class, 'experience'])->name('portfolio.experience');
