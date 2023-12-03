<?php
use Illuminate\Support\Facades\Route;

//landing

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'index'])->name('admin.code.index');
    Route::get('/admin/code-parent', [\App\Http\Controllers\Web\Admin\CodeController::class,'parent'])->name('admin.code.parent');
    Route::post('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'store'])->name('admin.code.store');
    Route::post('/admin/code_child', [\App\Http\Controllers\Web\Admin\CodeController::class,'child_store'])->name('admin.code.child_store');
    Route::put('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'update'])->name('admin.code.update');
    Route::delete('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'destroy'])->name('admin.code.delete');
    Route::get('/admin/code/{id}/show', [\App\Http\Controllers\Web\Admin\CodeController::class,'show'])->name('admin.code.show');
    Route::get('/admin/code/{id}/edit', [\App\Http\Controllers\Web\Admin\CodeController::class,'edit'])->name('admin.code.edit');

});
