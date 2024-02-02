<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::post('/taskAnswerDetail', [\App\Http\Controllers\Web\Landing\TaskAswerDetailController::class,'store'])->name('landing.task.answer.detail.store');
    Route::put('/taskAnswerDetail', [\App\Http\Controllers\Web\Landing\TaskAswerDetailController::class,'update'])->name('landing.task.answer.detail.update');

});
