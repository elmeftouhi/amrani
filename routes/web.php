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
Route::post('client/filter', [ClientController::class, 'filter'])->name('client.filter');

Route::resource('intermediaire', IntermediaireController::class);
Route::post('intermediaire/filter', [IntermediaireController::class, 'filter'])->name('intermediaire.filter');

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
Route::delete('/city/destroy/{city}', [CityController::class, 'destroy'])->name('city.destroy');
Route::put('/city/update/{city}', [CityController::class, 'update'])->name('city.update');
Route::post('/city/create/', [CityController::class, 'create'])->name('city.create');

Route::delete('/city/sector/destroy/{sector}', [CitySectorController::class, 'destroy'])->name('city.sector.destroy');
Route::put('/city/sector/update/{sector}', [CitySectorController::class, 'update'])->name('city.sector.update');
Route::post('/city/sector/create/', [CitySectorController::class, 'create'])->name('city.sector.create');

