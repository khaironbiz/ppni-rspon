<?php

use App\Http\Controllers\Web\admin\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/classes', [ClassController::class,'index'])->name('admin.class.index')->middleware('guest');
Route::get('/admin/class', [ClassController::class,'create'])->name('admin.class.create')->middleware('guest');
Route::post('/admin/classes', [ClassController::class,'store'])->name('admin.class.store')->middleware('guest');
Route::get('/admin/class/{slug}/show', [ClassController::class,'show'])->name('admin.class.show')->middleware('guest');
Route::get('/admin/class/{slug}/edit', [ClassController::class,'edit'])->name('admin.class.edit')->middleware('guest');
Route::delete('/admin/class', [ClassController::class,'destroy'])->name('admin.class.delete')->middleware('guest');
