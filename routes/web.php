<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WatchListController;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\MultiChartsController;
use App\Http\Controllers\NewPairsController;
use App\Http\Controllers\GainersLosersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/watchlist', [WatchListController::class, 'index'])->name('watchlist');
Route::get('/watchlist/add', [WatchListController::class, 'add'])->name('watchlist-add');
Route::get('/watchlist/add/token', [WatchListController::class, 'token'])->name('watchlist-token');
Route::get('/watchlist/token-add', [WatchListController::class, 'token_add'])->name('watchlist-token-add');
Route::get('/alerts', [AlertsController::class, 'index'])->name('alerts');
Route::get('/multi-charts', [MultiChartsController::class, 'index'])->name('multi-charts');
Route::get('/multi-charts/add', [MultiChartsController::class, 'add'])->name('multi-charts-add');
Route::get('/multi-charts/charts', [MultiChartsController::class, 'charts'])->name('multi-charts-charts');
Route::get('/new-pairs', [NewPairsController::class, 'index'])->name('new-pairs');
Route::get('/gainers-losers', [GainersLosersController::class, 'index'])->name('gainers-losers');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/wallet', [PortfolioController::class, 'wallet'])->name('portfolio-wallet');
Route::get('/advertise', [AdvertiseController::class, 'index'])->name('advertise');

Route::middleware('auth')->group(function () {
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
