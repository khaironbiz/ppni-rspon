<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'index'])->name('admin.curriculum_version.index');
    Route::get('/admin/curriculumVersion/{slug}/show', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'show'])->name('admin.curriculum_version.show');
    Route::post('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'store'])->name('admin.curriculum_version.store');
    Route::put('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'update'])->name('admin.curriculum_version.update');
    Route::delete('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'destroy'])->name('admin.curriculum_version.delete');
});
