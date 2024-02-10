<?php
use Illuminate\Support\Facades\Route;
Route::get('/master/pendidikan', [\App\Http\Controllers\DependantDropdownController::class,'pendidikan'])->name('dropdown.pendidikan.index');
Route::get('/master/pendidikan/child/{jenis_pendidikan}', [\App\Http\Controllers\DependantDropdownController::class,'sub_pendidikan'])->name('dropdown.pendidikan.child');
Route::get('/master/kurikulum/versi/{training_id}', [\App\Http\Controllers\DependantDropdownController::class,'kurikulum_versi'])->name('dropdown.kurikulum.versi');
