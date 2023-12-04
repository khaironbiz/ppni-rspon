<?php
use Illuminate\Support\Facades\Route;
Route::get('/profile', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'index'])->name('landing.profile');
Route::post('/profile', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'update'])->name('landing.profile.update');
Route::post('/profile/update/foto', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'update_foto'])->name('landing.profile.update.foto');
Route::get('/profile/update', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'edit'])->name('landing.profile.edit');
