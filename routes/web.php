<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;

Route::get('/', [CompanyProfileController::class, 'index']);
Route::put('/coba/update/{companyProfile}', [CompanyProfileController::class, 'update']);

Route::get('/', [CompanyProfileController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

Route::middleware('auth')->group(function () {

    Route::resource('article', ArticleController::class);

})->prefix();

require __DIR__.'/auth.php';
