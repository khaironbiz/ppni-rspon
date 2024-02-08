<?php
use App\Http\Controllers\Web\LandingController;
use Illuminate\Support\Facades\Route;
Route::get('/photos', [LandingController::class, 'photos'])->name('landing.photos')->middleware('guest');
Route::get('/videos', [LandingController::class, 'videos'])->name('landing.videos')->middleware('guest');
Route::get('/faq', [LandingController::class, 'faq'])->name('landing.faq')->middleware('guest');
Route::get('/price', [LandingController::class, 'price'])->name('landing.price')->middleware('guest');
Route::get('/booking', [LandingController::class, 'booking'])->name('landing.booking')->middleware('guest');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

Route::get('/person/show', [LandingController::class, 'person'])->name('landing.person.show')->middleware('guest');
Route::get('/text-area', [LandingController::class, 'text'])->middleware('guest');

Route::get('/crop-image-upload', [LandingController::class, 'upload'])->name('landing.upload')->middleware('guest');
Route::post('/crop-image-upload-ajax', [LandingController::class, 'crop'])->name('landing.upload.crop')->middleware('guest');

Route::get('/pengembangan', [LandingController::class, 'pengembangan'])->name('landing.pengembangan');



Route::get('/admin/event/create', [LandingController::class, 'ckeditor'])->name('admin.events.create')->middleware('guest');
Route::get('/stroke/knn', [LandingController::class, 'knn'])->name('stroke.knn')->middleware('guest');
