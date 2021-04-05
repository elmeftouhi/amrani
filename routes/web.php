<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntermediaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('client', ClientController::class);

Route::resource('intermediaire', IntermediaireController::class);


Route::get('/user', [ UserController::class, 'index' ])->name('user.index');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
