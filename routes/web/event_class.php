<?php

use Illuminate\Support\Facades\Route;

//landing
Route::get('/class', [App\Http\Controllers\Web\Landing\ClassController::class,'index'])->name('landing.class.index')->middleware('guest');
Route::get('/class/{slug}/show', [App\Http\Controllers\Web\Landing\ClassController::class,'show'])->name('landing.class.show')->middleware('guest');


Route::middleware(['auth'])->group(function () {
    //admin
    Route::get('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'index'])->name('admin.class.index');
    Route::get('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'create'])->name('admin.class.create');
    Route::post('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'store'])->name('admin.class.store');
    Route::get('/admin/class/{slug}/show', [\App\Http\Controllers\Web\Admin\ClassController::class,'show'])->name('admin.class.show');
    Route::get('/admin/class/{slug}/edit', [\App\Http\Controllers\Web\Admin\ClassController::class,'edit'])->name('admin.class.edit');
    Route::delete('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'destroy'])->name('admin.class.delete');
    Route::put('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'update'])->name('admin.class.update');

});
