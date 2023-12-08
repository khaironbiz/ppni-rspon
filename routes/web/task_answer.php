<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/taskAnswer', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'index'])->name('landing.task.enroll');
    Route::get('/taskAnswer/{id}/pretest', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'pretest'])->name('landing.task.pretest');
    Route::get('/taskAnswer/{id}/showSoal', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'show_soal'])->name('landing.task.show_soal');

});
