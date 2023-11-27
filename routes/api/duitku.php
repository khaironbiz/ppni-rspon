<?php

use App\Http\Controllers\Api\PaymentController;
use Illuminate\Support\Facades\Route;

Route::post('/payment/method', [PaymentController::class, 'payment_method'])->middleware('guest');
Route::post('/payment/create', [PaymentController::class, 'store'])->middleware('guest');
Route::post('/payment/callback', [PaymentController::class, 'callback'])->middleware('guest');
Route::post('/payment/status', [PaymentController::class, 'cek_transaksi'])->middleware('guest');
