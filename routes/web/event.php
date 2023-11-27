<?php

use App\Http\Controllers\Web\Landing\EventController;
use Illuminate\Support\Facades\Route;

//landing
Route::get('/events', [EventController::class,'index'])->name('landing.events')->middleware('guest');
Route::get('/event/{id}/show', [EventController::class,'show'])->name('landing.event.show')->middleware('guest');
Route::get('/event/{id}/topik', [EventController::class,'topik'])->name('landing.event.topik')->middleware('guest');

//admin
Route::get('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'index'])->name('admin.event.index')->middleware('guest');
Route::get('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'create'])->name('admin.event.create')->middleware('guest');
Route::post('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'store'])->name('admin.event.store')->middleware('guest');
Route::get('/admin/event/{slug}/show', [\App\Http\Controllers\Web\Admin\EventController::class,'show'])->name('admin.event.show')->middleware('guest');
Route::get('/admin/event/{slug}/edit', [\App\Http\Controllers\Web\Admin\EventController::class,'edit'])->name('admin.event.edit')->middleware('guest');
