<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv/create', function () {
    return 'CV Creation Page Coming Soon';
})->name('cv.create')->middleware('auth');

use App\Http\Controllers\CvController;

Route::get('/cv/create', [CvController::class, 'create'])->name('cv.create')->middleware('auth');
Route::post('/cv/store', [CvController::class, 'store'])->name('cv.store')->middleware('auth');
Route::get('/cv/list', [CvController::class, 'index'])->name('cv.index')->middleware('auth');
Route::get('/cv/{cv}/edit', [CvController::class, 'edit'])->name('cv.edit')->middleware('auth');
Route::put('/cv/{cv}', [CvController::class, 'update'])->name('cv.update')->middleware('auth');
Route::delete('/cv/{cv}', [CvController::class, 'destroy'])->name('cv.destroy')->middleware('auth');
