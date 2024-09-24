<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'index'])->name('admin.user.index');
    Route::get('/admin/user/{id}/show', [\App\Http\Controllers\Web\Admin\UserController::class,'show'])->name('admin.user.show');
    Route::post('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'store'])->name('admin.user.store');

    Route::get('/user/profile', [\App\Http\Controllers\Web\User\UserProfileController::class,'index'])->name('user.profile.index');
    Route::get('/user/profile/edit', [\App\Http\Controllers\Web\User\UserProfileController::class,'edit'])->name('user.profile.edit');
    Route::put('/user/profile/update', [\App\Http\Controllers\Web\User\UserProfileController::class,'update'])->name('user.profile.update');

});
