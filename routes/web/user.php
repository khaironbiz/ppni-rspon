<?php
use Illuminate\Support\Facades\Route;
Route::get('/profile', [\App\Http\Controllers\Web\Landing\UserController::class, 'profile'])->name('landing.profile');
