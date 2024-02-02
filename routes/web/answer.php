<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'index'])->name('admin.answer.index');
    Route::post('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'store'])->name('admin.answer.store');
    Route::put('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'update'])->name('admin.answer.update');
    Route::delete('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'destroy'])->name('admin.answer.delete');
    Route::get('/admin/answer/{id}/show', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'show'])->name('admin.answer.show');
    Route::get('/admin/answer/{id}/edit', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'edit'])->name('admin.answer.edit');

});
