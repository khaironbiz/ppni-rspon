<?php

use App\Http\Controllers\Web\Landing\EventController;
use Illuminate\Support\Facades\Route;

//landing

Route::middleware(['guest'])->group(function () {
    Route::get('/events', [EventController::class,'index'])->name('landing.events');
    Route::get('/event/{slug}/show', [EventController::class,'show'])->name('landing.event.show');
    Route::get('/event/{id}/topik', [EventController::class,'topik'])->name('landing.event.topik');
});


Route::middleware(['auth'])->group(function () {
    //admin
    Route::get('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'index'])->name('admin.event.index');
    Route::get('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'create'])->name('admin.event.create');
    Route::post('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'store'])->name('admin.event.store');
    Route::get('/admin/event/{slug}/show', [\App\Http\Controllers\Web\Admin\EventController::class,'show'])->name('admin.event.show');
    Route::get('/admin/event/{slug}/edit', [\App\Http\Controllers\Web\Admin\EventController::class,'edit'])->name('admin.event.edit');
    Route::put('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'update'])->name('admin.event.update');
    Route::delete('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'destroy'])->name('admin.event.destroy');

});
