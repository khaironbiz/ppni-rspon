<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'index'])->name('admin.question.index');
    Route::post('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'store'])->name('admin.question.store');
    Route::put('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'update'])->name('admin.question.update');
    Route::delete('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'destroy'])->name('admin.question.delete');
    Route::get('/admin/questions/{id}/show', [\App\Http\Controllers\Web\Admin\QuestionController::class,'show'])->name('admin.question.show');

});

?>
