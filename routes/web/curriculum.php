<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    Route::get('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'index'])->name('admin.curriculum.index');
    Route::post('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'store'])->name('admin.curriculum.store');
    Route::put('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'update'])->name('admin.curriculum.update');
    Route::delete('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'destroy'])->name('admin.curriculum.delete');
    Route::get('/admin/curriculum/{id}/show', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'show'])->name('admin.curriculum.show');

    //AKSES FOR USER
    Route::get('curriculum/{slug}/versi', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'versi'])->name('curriculum.versi');
    Route::get('curriculum/{slug}/canva', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'canva'])->name('curriculum.canva');

});
