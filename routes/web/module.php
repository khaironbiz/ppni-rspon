<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'index'])->name('admin.module.index')->middleware('guest');
Route::post('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'store'])->name('admin.module.store')->middleware('guest');
Route::put('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'update'])->name('admin.module.update')->middleware('guest');
Route::delete('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'destroy'])->name('admin.module.delete')->middleware('guest');
Route::get('/admin/module/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleController::class,'show'])->name('admin.module.show')->middleware('guest');
Route::get('/admin/module/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleController::class,'edit'])->name('admin.module.edit')->middleware('guest');
