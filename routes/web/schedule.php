<?php
use Illuminate\Support\Facades\Route;
Route::get('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'index'])->name('admin.schedule.index');

