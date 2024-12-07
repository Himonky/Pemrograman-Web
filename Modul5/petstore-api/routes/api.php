<?php

// routes/api.php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;

Route::resource('owners', OwnerController::class);
Route::resource('pets', PetController::class);
