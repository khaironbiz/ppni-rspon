<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'index'])->name('admin.module.index')->middleware('guest');
