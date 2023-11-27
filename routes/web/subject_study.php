<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'index'])->name('admin.subjectStudy.index')->middleware('guest');
Route::get('/admin/subjectStudy', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'create'])->name('admin.subjectStudy.create')->middleware('guest');
Route::post('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'store'])->name('admin.subjectStudy.store')->middleware('guest');
Route::get('/admin/subjectStudy/{slug}/show', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'show'])->name('admin.subjectStudy.show')->middleware('guest');
Route::get('/admin/subjectStudy/{slug}/edit', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'edit'])->name('admin.subjectStudy.edit')->middleware('guest');
Route::put('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'update'])->name('admin.subjectStudy.update')->middleware('guest');
Route::delete('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'destroy'])->name('admin.subjectStudy.delete')->middleware('guest');
