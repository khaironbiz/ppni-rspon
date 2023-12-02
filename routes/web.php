<?php



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

@include('web/curriculum_version.php');

@include('web/curriculum.php');

@include('web/module.php');

@include('web/module_attachment.php');

@include('web/code.php');

@include('web/landing.php');
//landing

