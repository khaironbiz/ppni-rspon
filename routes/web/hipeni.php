<?php

use App\Http\Controllers\Web\Admin\HipeniController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/hipeni', [HipeniController::class, 'index'])->name('hipeni.index')->middleware('auth');
