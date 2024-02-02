<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'index'])->name('landing.training.enroll.index');
    Route::post('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'store'])->name('landing.training.enroll.store');
    Route::put('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'update'])->name('landing.training.enroll.update');
    Route::delete('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'destroy'])->name('landing.training.enroll.delete');
    Route::get('/training/enroll', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'show'])->name('landing.training.enroll.show');
    Route::get('/training/enroll', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'edit'])->name('landing.training.enroll.edit');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/user/trainings', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'index'])->name('user.training.mine.index');
});
