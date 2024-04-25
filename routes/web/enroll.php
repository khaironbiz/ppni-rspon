<?php

use App\Http\Controllers\Web\Admin\HipeniController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/hipeni/enroll', [\App\Http\Controllers\Web\Admin\EnrollController::class, 'index'])->name('enroll.index')->middleware('auth');
