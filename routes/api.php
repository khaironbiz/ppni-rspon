<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/payment/method', [\App\Http\Controllers\Api\PaymentController::class, 'payment_method'])->middleware('guest');
Route::post('/payment/create', [\App\Http\Controllers\Api\PaymentController::class, 'store'])->middleware('guest');
Route::post('/payment/callback', [\App\Http\Controllers\Api\PaymentController::class, 'callback'])->middleware('guest');
Route::post('/payment/status', [\App\Http\Controllers\Api\PaymentController::class, 'cek_transaksi'])->middleware('guest');
