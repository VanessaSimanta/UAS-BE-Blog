<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;


Route::controller(dataController::class)->group(function () {
    Route::get('/', 'index');
    // Route::get('//{endpoint?}', 'getMYOD');
    Route::get('/make-your-own-drink/{endpoint?}', 'getMYOD');
    Route::get('/cappuccino', 'getCappuccino');
    Route::get('/cafe-mocha', 'getCafeMocha');
    Route::get('/vanilla-latte', 'getVanillaLatte');
});

Route::post('/', [FormController::class, 'addForm'])->name('form.message');
