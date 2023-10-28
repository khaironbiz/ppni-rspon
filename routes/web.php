<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/login', [AuthController::class, 'index'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.do')->middleware('guest');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot')->middleware('guest');
Route::post('/forgot', [AuthController::class, 'getPassword'])->name('auth.getPassword')->middleware('guest');
Route::get('/logout', [AuthController::class, 'index'])->name('auth.logout')->middleware('guest');



//landing
Route::get('/', [LandingController::class, 'index'])->name('landing.home')->middleware('guest');
Route::get('/news', [LandingController::class, 'news'])->name('landing.news')->middleware('guest');
Route::get('/events', [LandingController::class, 'events'])->name('landing.events')->middleware('guest');
Route::get('/photos', [LandingController::class, 'photos'])->name('landing.photos')->middleware('guest');
Route::get('/videos', [LandingController::class, 'videos'])->name('landing.videos')->middleware('guest');
Route::get('/faq', [LandingController::class, 'faq'])->name('landing.faq')->middleware('guest');
Route::get('/price', [LandingController::class, 'price'])->name('landing.price')->middleware('guest');
Route::get('/booking', [LandingController::class, 'booking'])->name('landing.booking')->middleware('guest');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact')->middleware('guest');

Route::get('/person/show', [LandingController::class, 'person'])->name('landing.person.show')->middleware('guest');

Route::get('/crop-image-upload', [LandingController::class, 'upload'])->name('landing.upload')->middleware('guest');
Route::post('/crop-image-upload-ajax', [LandingController::class, 'crop'])->name('landing.upload.crop')->middleware('guest');
