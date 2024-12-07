<?php

// routes/web.php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

// Ensure proper closing for the 'api' group
Route::prefix('api')->middleware('api')->group(function() {
    Route::resource('owners', OwnerController::class);
    Route::resource('pets', PetController::class);
});

// This is a default web route, will show the 'welcome' view
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});

