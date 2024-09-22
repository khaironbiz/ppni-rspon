<?php

use Illuminate\Support\Facades\Route;



Route::get('/class', [App\Http\Controllers\Web\Landing\ClassController::class,'index'])->name('landing.class.index');
Route::get('/class/{slug}/show', [App\Http\Controllers\Web\Landing\ClassController::class,'show'])->name('landing.class.show');

Route::middleware(['auth'])->group(function () {
    //landing
    Route::get('/MyClass', [App\Http\Controllers\Web\Landing\ClassController::class,'mine'])->name('landing.class.mine');
    Route::get('/enroll/{id}/show', [App\Http\Controllers\Web\Landing\ClassController::class,'show_enroll'])->name('landing.class.mine.show');

    //admin
    Route::get('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'index'])->name('admin.class.index');
    Route::get('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'create'])->name('admin.class.create');
    Route::post('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'store'])->name('admin.class.store');
    Route::get('/admin/class/{slug}/show', [\App\Http\Controllers\Web\Admin\ClassController::class,'show'])->name('admin.class.show');
    Route::get('/admin/class/{slug}/pelajaran', [\App\Http\Controllers\Web\Admin\ClassController::class,'mata_ajar'])->name('admin.class.mata_ajar');
    Route::get('/admin/class/{slug}/jadwal', [\App\Http\Controllers\Web\Admin\ClassController::class,'jadwal'])->name('admin.class.jadwal');
    Route::get('/admin/class/{slug}/edit', [\App\Http\Controllers\Web\Admin\ClassController::class,'edit'])->name('admin.class.edit');
    Route::delete('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'destroy'])->name('admin.class.delete');
    Route::put('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'update'])->name('admin.class.update');

});
