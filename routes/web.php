<?php


use App\Http\Controllers\FetchAllDataController;
use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [FetchAllDataController::class , 'index']);

Route::view('/contact' , 'contactForm')->name('contactForm');