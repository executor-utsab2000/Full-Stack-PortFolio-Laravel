<?php

use App\Http\Controllers\ContactFormManageController;
use App\Http\Controllers\HobbyManageController;
use App\Http\Controllers\SocialManageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FetchAllDataController;
use App\Http\Controllers\UserDataInsertController;


use App\Http\Controllers\AdminHomeDasBoardController;
use App\Http\Controllers\CategoryManageController;
use App\Http\Controllers\EducationManageController;
use App\Http\Controllers\LanguageManageController;



// Route::get('/', [FetchAllDataController::class , 'index']);
// Route::get('/contact', [FetchAllDataController::class , 'ContactForm'])->name('contactForm');

Route::controller(FetchAllDataController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact', 'ContactForm')->name('contactForm');
    Route::get('//projectDetailsPage/project_id/{id}', 'projectData')->name('projectDetailsPage');
});

Route::post('/formSubmitUser', UserDataInsertController::class)->name('userFormSubmit');

// --------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------


Route::get('/admin', [AdminHomeDasBoardController::class, 'adminDashBoardData'])->name('admin');


Route::resource('language', LanguageManageController::class);
Route::resource('education', EducationManageController::class);
Route::resource('category', CategoryManageController::class);
Route::resource('social', SocialManageController::class);
Route::resource('hobby', HobbyManageController::class);
Route::resource('contact_form', ContactFormManageController::class);










// trials

// Route::view('/tryAdmin', 'ADMIN.MasterLayout.masterLayout');

