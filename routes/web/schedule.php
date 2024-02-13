<?php
use Illuminate\Support\Facades\Route;
Route::get('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'index'])->name('admin.schedule.index');
Route::post('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'store'])->name('admin.schedule.store');
Route::put('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'update'])->name('admin.schedule.update');

