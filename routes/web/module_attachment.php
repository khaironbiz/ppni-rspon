<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'index'])->name('admin.module_attachment.index')->middleware('guest');
Route::post('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'store'])->name('admin.module_attachment.store')->middleware('guest');
Route::put('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'update'])->name('admin.module_attachment.update')->middleware('guest');
Route::delete('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'destroy'])->name('admin.module_attachment.delete')->middleware('guest');
Route::get('/admin/module_attachment/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'show'])->name('admin.module_attachment.show')->middleware('guest');
Route::get('/admin/module_attachment/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'edit'])->name('admin.module_attachment.edit')->middleware('guest');
