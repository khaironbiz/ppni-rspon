<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/taskAnswer', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'index'])->name('landing.task.enroll');
    Route::get('/taskAnswer/{id}/pretest', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'pretest'])->name('landing.task.pretest');
    Route::get('/taskAnswer/{task_answer_id}/pretest/soal/{enroll_id}', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'list_soal'])->name('landing.task.pretest.soal');
    Route::get('/taskAnswer/{id}/posttest', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'posttest'])->name('landing.task.posttest');
    Route::get('/taskAnswer/{id}/showSoal/{enroll_id}', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'show_soal'])->name('landing.task.show_soal');
    Route::put('/taskAnswer/finish', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'task_finish'])->name('landing.task.finish');

});
