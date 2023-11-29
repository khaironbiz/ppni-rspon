<?php

use App\Http\Controllers\Web\Admin\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/topics', [TopicController::class,'index'])->name('admin.topic.index')->middleware('guest');
Route::get('/admin/topic', [TopicController::class,'create'])->name('admin.topic.create')->middleware('guest');
