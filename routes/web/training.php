<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/trainings', [\App\Http\Controllers\Web\Admin\TrainingController::class,'index'])->name('admin.training.index');
    Route::get('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'create'])->name('admin.training.create');
    Route::post('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'store'])->name('admin.training.store');
    Route::put('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'update'])->name('admin.training.update');
    Route::delete('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'destroy'])->name('admin.training.destroy');
    Route::get('/admin/training/{slug}/show', [\App\Http\Controllers\Web\Admin\TrainingController::class,'show'])->name('admin.training.show');

});


//curriculum version
