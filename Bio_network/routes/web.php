<?php
use App\Http\Controllers\CvController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public welcome page (no auth)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard page - requires authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// CV routes - require authentication
Route::middleware('auth')->group(function () {
    Route::get('/cv/create', [CvController::class, 'create'])->name('cv.create');
    Route::post('/cv/store', [CvController::class, 'store'])->name('cv.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cv', [CvController::class, 'index'])->name('cv.index');
    Route::get('/cv', [CvController::class, 'index'])->name('cv.index')->middleware('auth');

    // Add other CV routes (edit, update, destroy) here
});

// Profile and other authenticated routes here as before

require __DIR__.'/auth.php';
