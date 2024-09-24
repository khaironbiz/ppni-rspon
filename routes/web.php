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


Route::get('/', [App\Http\Controllers\Web\Landing\ClassController::class,'index'])->name('landing.home');

@include ('web/ajax.php');

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

@include('web/training_question.php');

@include('web/training_enroll.php');

@include('web/question.php');

@include('web/answer.php');

@include('web/task.php');

@include('web/task_answer.php');

@include('web/task_answer_detail.php');

@include('web/landing.php');

@include('web/user.php');

@include('web/pendidikan.php');

@include('web/profile.php');

@include ('web/file.php');

@include ('web/schedule.php');

@include ('web/hipeni.php');

@include ('web/enroll.php');

@include ('web/nira.php');

@include ('web/web.php');
//landing

