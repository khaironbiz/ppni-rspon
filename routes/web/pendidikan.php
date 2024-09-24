<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth'])->group(function () {
    Route::get('/user/pendidikan', [\App\Http\Controllers\Web\User\PendidikanController::class,'index'])->name('user.pendidikan');
    Route::post('/user/pendidikan', [\App\Http\Controllers\Web\User\PendidikanController::class,'store'])->name('user.pendidikan.store');
    Route::get('/user/pendidikan/{id}/show', [\App\Http\Controllers\Web\User\PendidikanController::class,'show'])->name('user.pendidikan.show');


    Route::get('/user/profile/pekerjaan', [\App\Http\Controllers\Web\User\UserProfileController::class,'pekerjaan'])->name('user.profile.pekerjaan');
    Route::get('/user/profile/pelatihan', [\App\Http\Controllers\Web\User\UserProfileController::class,'pelatihan'])->name('user.profile.pelatihan');
    Route::get('/user/profile/organisasi', [\App\Http\Controllers\Web\User\UserProfileController::class,'organisasi'])->name('user.profile.organisasi');
    Route::get('/user/profile/alamat', [\App\Http\Controllers\Web\User\UserProfileController::class,'alamat'])->name('user.profile.alamat');

});
