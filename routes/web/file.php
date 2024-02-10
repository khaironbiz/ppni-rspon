<?php
use Illuminate\Support\Facades\Route;
Route::get('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'index'])->name('user.file.index');
Route::post('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'store'])->name('user.file.store');
Route::post('user/files/external', [\App\Http\Controllers\Web\User\UserFileController::class,'store_external'])->name('user.file.store.external');
Route::get('user/file/{id}/view', [\App\Http\Controllers\Web\User\UserFileController::class,'view'])->name('user.file.show.view');
Route::get('user/file/{id}/show', [\App\Http\Controllers\Web\User\UserFileController::class,'show'])->name('user.file.show');
Route::delete('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'destroy'])->name('user.file.delete');
