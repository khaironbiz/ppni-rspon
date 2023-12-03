<?php

use App\Http\Controllers\Web\Admin\TopicController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/topics', [TopicController::class,'index'])->name('admin.topic.index');
    Route::get('/admin/topic', [TopicController::class,'create'])->name('admin.topic.create');
    Route::post('/admin/topics', [TopicController::class,'store'])->name('admin.topic.store');
    Route::get('/admin/topic/{slug}/show', [TopicController::class,'show'])->name('admin.topic.show');
    Route::delete('/admin/topic', [TopicController::class,'destroy'])->name('admin.topic.delete');
    Route::get('/admin/topic/{slug}/edit', [TopicController::class,'edit'])->name('admin.topic.edit');
    Route::put('/admin/update', [TopicController::class,'update'])->name('admin.topic.update');

});
