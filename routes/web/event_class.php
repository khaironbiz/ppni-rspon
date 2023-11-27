<?php

use App\Http\Controllers\Web\admin\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'index'])->name('admin.class.index')->middleware('guest');
Route::get('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'create'])->name('admin.class.create')->middleware('guest');
Route::post('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'store'])->name('admin.class.store')->middleware('guest');
Route::get('/admin/class/{slug}/show', [\App\Http\Controllers\Web\Admin\ClassController::class,'show'])->name('admin.class.show')->middleware('guest');
Route::get('/admin/class/{slug}/edit', [\App\Http\Controllers\Web\Admin\ClassController::class,'edit'])->name('admin.class.edit')->middleware('guest');
Route::delete('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'destroy'])->name('admin.class.delete')->middleware('guest');
Route::put('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'update'])->name('admin.class.update')->middleware('guest');
