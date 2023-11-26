<?php

use App\Http\Controllers\Web\admin\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/classes', [ClassController::class,'index'])->name('admin.class.index')->middleware('guest');
Route::get('/admin/class', [ClassController::class,'create'])->name('admin.class.create')->middleware('guest');
