<?php

use App\Http\Controllers\Web\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/news', [LandingController::class, 'news'])->name('landing.news')->middleware('guest');
