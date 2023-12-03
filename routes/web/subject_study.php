<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'index'])->name('admin.subjectStudy.index');
    Route::get('/admin/subjectStudy', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'create'])->name('admin.subjectStudy.create');
    Route::post('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'store'])->name('admin.subjectStudy.store');
    Route::get('/admin/subjectStudy/{slug}/show', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'show'])->name('admin.subjectStudy.show');
    Route::get('/admin/subjectStudy/{slug}/edit', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'edit'])->name('admin.subjectStudy.edit');
    Route::put('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'update'])->name('admin.subjectStudy.update');
    Route::delete('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'destroy'])->name('admin.subjectStudy.delete');

});
