<?php
use Illuminate\Support\Facades\Route;

//landing
Route::get('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'index'])->name('admin.code.index')->middleware('guest');
Route::get('/admin/code-parent', [\App\Http\Controllers\Web\Admin\CodeController::class,'parent'])->name('admin.code.parent')->middleware('guest');
Route::post('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'store'])->name('admin.code.store')->middleware('guest');
Route::post('/admin/code_child', [\App\Http\Controllers\Web\Admin\CodeController::class,'child_store'])->name('admin.code.child_store')->middleware('guest');
Route::put('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'update'])->name('admin.code.update')->middleware('guest');
Route::delete('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'destroy'])->name('admin.code.delete')->middleware('guest');
Route::get('/admin/code/{id}/show', [\App\Http\Controllers\Web\Admin\CodeController::class,'show'])->name('admin.code.show')->middleware('guest');
Route::get('/admin/code/{id}/edit', [\App\Http\Controllers\Web\Admin\CodeController::class,'edit'])->name('admin.code.edit')->middleware('guest');
