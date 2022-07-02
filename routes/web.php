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


Route::controller(CustomerController::class)->group(function(){

    Route::get('/customers-data', 'showData')->middleware(['auth'])->name('dashboard');
    Route::get('delete-customer/{customer_id}', 'destroy')->middleware(['auth']);

});

require __DIR__.'/auth.php';
