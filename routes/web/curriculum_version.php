<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'index'])->name('admin.curriculum_version.index')->middleware('guest');
Route::get('/admin/curriculumVersion/{slug}/show', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'show'])->name('admin.curriculum_version.show')->middleware('guest');
Route::post('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'store'])->name('admin.curriculum_version.store')->middleware('guest');
Route::put('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'update'])->name('admin.curriculum_version.update')->middleware('guest');
Route::delete('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'destroy'])->name('admin.curriculum_version.delete')->middleware('guest');
