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
    Route::get('/user/trainings/order', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'order_training'])->name('user.training.mine.order');
    Route::get('/user/trainings/next', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'next_training'])->name('user.training.mine.next');
    Route::get('/user/trainings/current', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'current_training'])->name('user.training.mine.current');
    Route::get('/user/trainings', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'index'])->name('user.training.mine.index');
    Route::get('/user/training/{id}/show', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'show'])->name('user.training.mine.show');
    Route::get('/user/training/{id}/schedule', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'schedule'])->name('user.training.mine.schedule');
    Route::get('/user/training/{id}/pretest', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'pretest'])->name('user.training.mine.pretest');
});
