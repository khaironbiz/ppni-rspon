<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/niras', [\App\Http\Controllers\Web\Admin\NiraController::class,'index'])->name('admin.nira.index');

});
