<?php


use App\Http\Controllers\FetchAllDataController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [FetchAllDataController::class , 'index']);
// Route::get('/contact', [FetchAllDataController::class , 'ContactForm'])->name('contactForm');

Route::controller(FetchAllDataController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact', 'ContactForm')->name('contactForm');
});

