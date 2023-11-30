<?php


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

Route::get('/', [App\Http\Controllers\Web\Landing\ClassController::class,'index'])->name('landing.home')->middleware('guest');

@include('web/auth.php');

@include('web/event.php');

@include('web/event_class.php');

@include('web/subject_study.php');

@include('web/event_topic.php');

@include('web/news.php');

@include('web/training.php');

@include('web/modul.php');
//landing

Route::get('/photos', [LandingController::class, 'photos'])->name('landing.photos')->middleware('guest');
Route::get('/videos', [LandingController::class, 'videos'])->name('landing.videos')->middleware('guest');
Route::get('/faq', [LandingController::class, 'faq'])->name('landing.faq')->middleware('guest');
Route::get('/price', [LandingController::class, 'price'])->name('landing.price')->middleware('guest');
Route::get('/booking', [LandingController::class, 'booking'])->name('landing.booking')->middleware('guest');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact')->middleware('guest');

Route::get('/person/show', [LandingController::class, 'person'])->name('landing.person.show')->middleware('guest');
Route::get('/text-area', [LandingController::class, 'text'])->middleware('guest');

Route::get('/crop-image-upload', [LandingController::class, 'upload'])->name('landing.upload')->middleware('guest');
Route::post('/crop-image-upload-ajax', [LandingController::class, 'crop'])->name('landing.upload.crop')->middleware('guest');

Route::get('/ckeditor', [LandingController::class, 'ckeditor'])->name('landing.admin.events.create')->middleware('guest');

Route::get('/admin/event/create', [LandingController::class, 'ckeditor'])->name('admin.events.create')->middleware('guest');
