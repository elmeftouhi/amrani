<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntermediaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('client', ClientController::class);

Route::resource('intermediaire', IntermediaireController::class);

Route::resource('appartement', AppartementController::class);

Route::get('/dashboard/totals', [DashboardController::class, 'getTotals'])->name('dashboard.totals');


Route::get('/user', [ UserController::class, 'index' ])->name('user.index');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
