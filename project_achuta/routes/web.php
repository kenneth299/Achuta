<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ConnectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardSellerController;
use App\Http\Controllers\ElectronicsController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\WomenController;
use App\Http\Middleware\Admin;
use PHPUnit\Framework\Attributes\Medium;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/container', [ContainerController::class, 'index'])->name('container');
Route::get('/acceuil', [AcceuilController::class, 'index'])->name('acceuil');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/creator', [CreatorController::class, 'index'])->name('creator');
Route::get('/electronics', [ElectronicsController::class, 'index'])->name('electronics');
Route::get('/entertainment', [EntertainmentController::class, 'index'])->name('entertainment');
Route::get('/kids', [KidsController::class, 'index'])->name('kids');
Route::get('/men', [MenController::class, 'index'])->name('men');
Route::get('/women', [WomenController::class, 'index'])->name('women');
Route::get('/connect', [ConnectController::class, 'index'])->name('connect');
Route::get('/dashboardAdmin', [DashboardAdminController::class, 'index'])->name('dashboardAdmin')->middleware(Admin::class);
Route::get('/dashboardSeller', [DashboardSellerController::class, 'index'])->name('dashboardSeller');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
