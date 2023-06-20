<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::match(['get'],'/', function() {
    return view('index');
})->name('home');

Route::match(['get'], '/creer', function () {
    return view('create');
})->name('create');

Route::match(['post'], '/creer/store', function () {})->name('store');

Route::get('/connexion', [AuthController::class, 'login'])->name('login');
Route::post('/connexion', [AuthController::class, 'processLogin']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/dashboard/accepter/{faq}', [DashboardController::class, 'accept'])->name('dashboard.accept')->middleware('auth');
Route::get('/dashboard/refuser/{faq}', [DashboardController::class, 'refuse'])->name('dashboard.refuse')->middleware('auth');
