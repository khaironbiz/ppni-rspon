<?php


use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/webs', [\App\Http\Controllers\Web\Admin\WebController::class,'index'])->name('admin.web.index');
    Route::post('/admin/webs', [\App\Http\Controllers\Web\Admin\WebController::class,'store'])->name('admin.web.store');

});
