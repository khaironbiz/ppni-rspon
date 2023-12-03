<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'index'])->name('admin.module.index');
    Route::post('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'store'])->name('admin.module.store');
    Route::put('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'update'])->name('admin.module.update');
    Route::delete('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'destroy'])->name('admin.module.delete');
    Route::get('/admin/module/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleController::class,'show'])->name('admin.module.show');
    Route::get('/admin/module/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleController::class,'edit'])->name('admin.module.edit');

});
