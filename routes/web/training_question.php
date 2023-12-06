<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'index'])->name('admin.training.question.index');
    Route::post('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'store'])->name('admin.training.question.store');
    Route::put('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'update'])->name('admin.training.question.update');
    Route::delete('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'destroy'])->name('admin.training.question.delete');
    Route::get('/admin/trainingQuestion/{id}/show', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'show'])->name('admin.training.question.show');
    Route::get('/admin/trainingQuestion/{id}/edit', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'edit'])->name('admin.training.question.edit');
});
