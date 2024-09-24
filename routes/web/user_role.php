<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/userRoles', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'index'])->name('admin.user_role.index');
    Route::get('/admin/userRole/{id}/show', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'show'])->name('admin.user_role.show');
    Route::post('/admin/userRoles', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'store'])->name('admin.user_role.store');



});
