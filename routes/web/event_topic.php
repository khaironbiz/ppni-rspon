<?php

use App\Http\Controllers\Web\Admin\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/topics', [TopicController::class,'index'])->name('admin.topic.index')->middleware('guest');
Route::get('/admin/topic', [TopicController::class,'create'])->name('admin.topic.create')->middleware('guest');
Route::post('/admin/topics', [TopicController::class,'store'])->name('admin.topic.store')->middleware('guest');
Route::get('/admin/topic/{slug}/show', [TopicController::class,'show'])->name('admin.topic.show')->middleware('guest');
Route::delete('/admin/topic', [TopicController::class,'destroy'])->name('admin.topic.delete')->middleware('guest');
