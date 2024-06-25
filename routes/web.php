<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CommentController;


Route::controller(dataController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/kopi-inspirasi', 'getKopiInspirasi');
    Route::get('/matcha-latte', 'getMatchaLatte');
    Route::get('/caramel-macchiato', 'getCaramelMacchiato');
    Route::get('/post-comment', 'testimoniesInput')->name('post-comment');
});

Route::post('/', [FormController::class, 'addForm'])->name('form.message');
Route::post('/post-comment', [CommentController::class, 'store'])->name('post.comment');


