<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'index'])->name('admin.module_attachment.index');
    Route::post('/admin/module_attachments/file/upload', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'uploadFile'])->name('admin.module_attachment.uploadFile');
    Route::get('/admin/module_attachments/{id}/download', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'download'])->name('admin.module_attachment.download');
    Route::post('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'store'])->name('admin.module_attachment.store');
    Route::put('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'update'])->name('admin.module_attachment.update');
    Route::delete('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'destroy'])->name('admin.module_attachment.delete');
    Route::get('/admin/module_attachment/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'show'])->name('admin.module_attachment.show');
    Route::get('/admin/module_attachment/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'edit'])->name('admin.module_attachment.edit');

});
