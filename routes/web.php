<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FetchAllDataController;
use App\Http\Controllers\UserDataInsertController;

use App\Http\Controllers\AdminHomeDasBoardController;

use App\Http\Controllers\LanguageManageController;
use App\Http\Controllers\CategoryManageController;
use App\Http\Controllers\EducationManageController;
use App\Http\Controllers\ProjectManageController;
use App\Http\Controllers\HobbyManageController;
use App\Http\Controllers\SocialManageController;
use App\Http\Controllers\ContactFormManageController;



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

Route::resource('project', ProjectManageController::class);

Route::resource('language', LanguageManageController::class)->except('show');
Route::resource('category', CategoryManageController::class)->except('show');

Route::resource('education', EducationManageController::class)->only('index');
Route::resource('social', SocialManageController::class)->except('show')->only('index');
Route::resource('hobby', HobbyManageController::class)->except('show')->only('index');

Route::resource('contact_form', ContactFormManageController::class)->only([
    'index',
    'update',
    'destroy'
]);









// trials

Route::view('/tryAdmin', 'ADMIN.PAGES.projectDetailsAdmin');

