<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'index'])->name('admin.task.index');
    Route::post('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'store'])->name('admin.task.store');
    Route::put('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'update'])->name('admin.task.update');
    Route::delete('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'destroy'])->name('admin.task.delete');
    Route::get('/admin/task/{id}/show', [\App\Http\Controllers\Web\Admin\TaskController::class,'show'])->name('admin.task.show');
    Route::get('/admin/task/{id}/edit', [\App\Http\Controllers\Web\Admin\TaskController::class,'edit'])->name('admin.task.edit');
});
