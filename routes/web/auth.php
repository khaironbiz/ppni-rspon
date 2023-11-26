<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.do')->middleware('guest');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot')->middleware('guest');
Route::post('/forgot', [AuthController::class, 'getPassword'])->name('auth.getPassword')->middleware('guest');
Route::get('/logout', [AuthController::class, 'index'])->name('auth.logout')->middleware('guest');

?>
