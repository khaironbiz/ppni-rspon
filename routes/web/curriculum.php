<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'index'])->name('admin.curriculum.index')->middleware('guest');
Route::post('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'store'])->name('admin.curriculum.store')->middleware('guest');
Route::put('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'update'])->name('admin.curriculum.update')->middleware('guest');
Route::delete('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'destroy'])->name('admin.curriculum.delete')->middleware('guest');
Route::get('/admin/curriculum/{id}/show', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'show'])->name('admin.curriculum.show')->middleware('guest');


//landing page
//Route::get('/curriculum/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'store'])->name('admin.curriculum.store')->middleware('guest');
