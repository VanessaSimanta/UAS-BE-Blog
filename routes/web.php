<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;

Route::controller(dataController::class)->group(function () {
    Route::get('/', 'index');
});
