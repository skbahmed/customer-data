<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/customers-data', [CustomerController::class, 'showData'])->middleware(['auth'])->name('dashboard');
Route::get('/customers-api', [CustomerController::class, 'showAPI'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
