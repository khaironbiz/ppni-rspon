<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.do')->middleware('guest');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot')->middleware('guest');
Route::post('/forgot', [AuthController::class, 'getPassword'])->name('auth.getPassword')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::post('/daftar', [AuthController::class, 'do_register'])->name('auth.daftar')->middleware('guest');

?>
