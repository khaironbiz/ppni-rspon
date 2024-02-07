<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'index'])->name('admin.user.index');
    Route::get('/admin/user/{id}/show', [\App\Http\Controllers\Web\Admin\UserController::class,'show'])->name('admin.user.show');
    Route::post('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'store'])->name('admin.user.store');
});
