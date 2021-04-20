<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CitySectorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\IntermediaireController;
use App\Models\City;
use App\Models\CitySector;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('client', ClientController::class);
Route::post('client/search', [ClientController::class, 'search'])->name('client.search');

Route::resource('intermediaire', IntermediaireController::class);

Route::resource('appartement', AppartementController::class);

Route::get('/dashboard/totals', [DashboardController::class, 'getTotals'])->name('dashboard.totals');

Route::post('file/upload', [FileUploadController::class, 'upload'])->name('file.upload');
Route::post('file/read', [FileUploadController::class, 'getFiles'])->name('file.read');

Route::get('/user', [ UserController::class, 'index' ])->name('user.index');

Route::get('/parameters', function(){
    return view('amrani.pages.parameters.index')->with(['cities'=>City::all()]);
})->name('params');

Route::get('parameters/city/create', [CityController::class, 'create'])->name('city.create');

Route::get('/city/sectors/{id_city}', [CitySectorController::class, 'getByCity'])->name('sectors.list');


