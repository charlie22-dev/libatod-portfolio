<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('portfolio.home');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio.projects');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');