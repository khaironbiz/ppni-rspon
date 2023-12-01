<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin/trainings', [\App\Http\Controllers\Web\Admin\TrainingController::class,'index'])->name('admin.training.index')->middleware('guest');
Route::get('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'create'])->name('admin.training.create')->middleware('guest');
Route::post('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'store'])->name('admin.training.store')->middleware('guest');
Route::put('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'update'])->name('admin.training.update')->middleware('guest');
Route::delete('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'destroy'])->name('admin.training.destroy')->middleware('guest');
Route::get('/admin/training/{slug}/show', [\App\Http\Controllers\Web\Admin\TrainingController::class,'show'])->name('admin.training.show')->middleware('guest');


//curriculum version
