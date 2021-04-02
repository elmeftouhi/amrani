<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/client', [ ClientController::class, 'index' ])->name('client.index');
Route::get('/client/create', [ ClientController::class, 'create' ])->name('client.create');

Route::get('/intermediaire', [ ClientController::class, 'index' ])->name('intermediaire.index');

Route::get('/user', [ UserController::class, 'index' ])->name('user.index');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
