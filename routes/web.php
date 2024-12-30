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

Route::get('/comingsoon', [App\Http\Controllers\Web\LandingController::class,'comingsoon'])->name('landing.comingsoon');
Route::get('/blog', [App\Http\Controllers\Web\LandingController::class,'blog'])->name('landing.blog');

Route::get('/master/pendidikan', [\App\Http\Controllers\DependantDropdownController::class,'pendidikan'])->name('dropdown.pendidikan.index');
Route::get('/master/pendidikan/child/{jenis_pendidikan}', [\App\Http\Controllers\DependantDropdownController::class,'sub_pendidikan'])->name('dropdown.pendidikan.child');
Route::get('/master/kurikulum/versi/{training_id}', [\App\Http\Controllers\DependantDropdownController::class,'kurikulum_versi'])->name('dropdown.kurikulum.versi');

//wilayah
Route::get('kota/{id_prov}', [\App\Http\Controllers\DependantDropdownController::class,'kota']);

Route::get('/login', [\App\Http\Controllers\Web\AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\Web\AuthController::class, 'login'])->name('auth.login.do')->middleware('guest');
Route::get('/forgot', [\App\Http\Controllers\Web\AuthController::class, 'forgot'])->name('auth.forgot')->middleware('guest');
Route::post('/forgot', [\App\Http\Controllers\Web\AuthController::class, 'getPassword'])->name('auth.getPassword')->middleware('guest');
Route::get('/logout', [\App\Http\Controllers\Web\AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::get('/register', [\App\Http\Controllers\Web\AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::post('/daftar', [\App\Http\Controllers\Web\AuthController::class, 'do_register'])->name('auth.daftar')->middleware('guest');
Route::get('/fastLoginAdmin', [\App\Http\Controllers\Web\AuthController::class, 'fast_login_admin'])->name('auth.fast.login.admin')->middleware('auth');

Route::get('/events', [\App\Http\Controllers\Web\Landing\EventController::class,'index'])->name('landing.events');
Route::get('/event/{slug}/show', [\App\Http\Controllers\Web\Landing\EventController::class,'show'])->name('landing.event.show');
Route::get('/event/{id}/topik', [\App\Http\Controllers\Web\Landing\EventController::class,'topik'])->name('landing.event.topik');

Route::middleware(['auth'])->group(function () {
    //admin
    Route::get('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'index'])->name('admin.event.index');
    Route::get('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'create'])->name('admin.event.create');
    Route::post('/admin/events', [\App\Http\Controllers\Web\Admin\EventController::class,'store'])->name('admin.event.store');
    Route::get('/admin/event/{slug}/show', [\App\Http\Controllers\Web\Admin\EventController::class,'show'])->name('admin.event.show');
    Route::get('/admin/event/{slug}/edit', [\App\Http\Controllers\Web\Admin\EventController::class,'edit'])->name('admin.event.edit');
    Route::put('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'update'])->name('admin.event.update');
    Route::delete('/admin/event', [\App\Http\Controllers\Web\Admin\EventController::class,'destroy'])->name('admin.event.destroy');

});

Route::get('/class', [App\Http\Controllers\Web\Landing\ClassController::class,'index'])->name('landing.class.index');
Route::get('/class/{slug}/show', [App\Http\Controllers\Web\Landing\ClassController::class,'show'])->name('landing.class.show');


Route::middleware(['auth'])->group(function () {
    //landing
    Route::get('/MyClass', [App\Http\Controllers\Web\Landing\ClassController::class,'mine'])->name('landing.class.mine');
    Route::get('/enroll/{id}/show', [App\Http\Controllers\Web\Landing\ClassController::class,'show_enroll'])->name('landing.class.mine.show');

    //admin
    Route::get('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'index'])->name('admin.class.index');
    Route::get('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'create'])->name('admin.class.create');
    Route::post('/admin/classes', [\App\Http\Controllers\Web\Admin\ClassController::class,'store'])->name('admin.class.store');
    Route::get('/admin/class/{slug}/show', [\App\Http\Controllers\Web\Admin\ClassController::class,'show'])->name('admin.class.show');
    Route::get('/admin/class/{slug}/pelajaran', [\App\Http\Controllers\Web\Admin\ClassController::class,'mata_ajar'])->name('admin.class.mata_ajar');
    Route::get('/admin/class/{slug}/jadwal', [\App\Http\Controllers\Web\Admin\ClassController::class,'jadwal'])->name('admin.class.jadwal');
    Route::get('/admin/class/{slug}/edit', [\App\Http\Controllers\Web\Admin\ClassController::class,'edit'])->name('admin.class.edit');
    Route::delete('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'destroy'])->name('admin.class.delete');
    Route::put('/admin/class', [\App\Http\Controllers\Web\Admin\ClassController::class,'update'])->name('admin.class.update');

});



Route::middleware(['auth'])->group(function () {
    Route::get('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'index'])->name('admin.subjectStudy.index');
    Route::get('/admin/subjectStudy', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'create'])->name('admin.subjectStudy.create');
    Route::post('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'store'])->name('admin.subjectStudy.store');
    Route::get('/admin/subjectStudy/{slug}/show', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'show'])->name('admin.subjectStudy.show');
    Route::get('/admin/subjectStudy/{slug}/edit', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'edit'])->name('admin.subjectStudy.edit');
    Route::put('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'update'])->name('admin.subjectStudy.update');
    Route::delete('/admin/subjectStudies', [\App\Http\Controllers\Web\Admin\SubjectStudyController::class,'destroy'])->name('admin.subjectStudy.delete');

});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/topics', [\App\Http\Controllers\Web\Admin\TopicController::class,'index'])->name('admin.topic.index');
    Route::get('/admin/topic', [\App\Http\Controllers\Web\Admin\TopicController::class,'create'])->name('admin.topic.create');
    Route::post('/admin/topics', [\App\Http\Controllers\Web\Admin\TopicController::class,'store'])->name('admin.topic.store');
    Route::get('/admin/topic/{slug}/show', [\App\Http\Controllers\Web\Admin\TopicController::class,'show'])->name('admin.topic.show');
    Route::delete('/admin/topic', [\App\Http\Controllers\Web\Admin\TopicController::class,'destroy'])->name('admin.topic.delete');
    Route::get('/admin/topic/{slug}/edit', [\App\Http\Controllers\Web\Admin\TopicController::class,'edit'])->name('admin.topic.edit');
    Route::put('/admin/update', [\App\Http\Controllers\Web\Admin\TopicController::class,'update'])->name('admin.topic.update');

});

Route::get('/news', [\App\Http\Controllers\Web\LandingController::class, 'news'])->name('landing.news')->middleware('guest');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/trainings', [\App\Http\Controllers\Web\Admin\TrainingController::class,'index'])->name('admin.training.index');
    Route::get('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'create'])->name('admin.training.create');
    Route::post('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'store'])->name('admin.training.store');
    Route::put('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'update'])->name('admin.training.update');
    Route::delete('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'destroy'])->name('admin.training.destroy');
    Route::get('/admin/training/{slug}/show', [\App\Http\Controllers\Web\Admin\TrainingController::class,'show'])->name('admin.training.show');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'index'])->name('admin.curriculum_version.index');
    Route::get('/admin/curriculumVersion/{slug}/show', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'show'])->name('admin.curriculum_version.show');
    Route::post('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'store'])->name('admin.curriculum_version.store');
    Route::put('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'update'])->name('admin.curriculum_version.update');
    Route::delete('/admin/curriculumVersions', [\App\Http\Controllers\Web\Admin\CurriculumVersionController::class,'destroy'])->name('admin.curriculum_version.delete');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'index'])->name('admin.curriculum.index');
    Route::post('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'store'])->name('admin.curriculum.store');
    Route::put('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'update'])->name('admin.curriculum.update');
    Route::delete('/admin/curricula', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'destroy'])->name('admin.curriculum.delete');
    Route::get('/admin/curriculum/{id}/show', [\App\Http\Controllers\Web\Admin\CurriculumController::class,'show'])->name('admin.curriculum.show');

    //AKSES FOR USER
    Route::get('curriculums', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'index'])->name('curriculum.index');
    Route::get('curriculum/{id}/show', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'show'])->name('curriculum.show');
    Route::get('curriculum/{slug}/versi', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'versi'])->name('curriculum.versi');
    Route::get('curriculum/{slug}/canva/{enroll_id}', [\App\Http\Controllers\Web\Landing\CurriculumController::class,'canva'])->name('curriculum.canva');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'index'])->name('admin.module.index');
    Route::post('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'store'])->name('admin.module.store');
    Route::put('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'update'])->name('admin.module.update');
    Route::delete('/admin/modules', [\App\Http\Controllers\Web\Admin\ModuleController::class,'destroy'])->name('admin.module.delete');
    Route::get('/admin/module/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleController::class,'show'])->name('admin.module.show');
    Route::get('/admin/module/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleController::class,'edit'])->name('admin.module.edit');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'index'])->name('admin.module_attachment.index');
    Route::post('/admin/module_attachments/file/upload', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'uploadFile'])->name('admin.module_attachment.uploadFile');
    Route::get('/admin/module_attachments/{id}/download', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'download'])->name('admin.module_attachment.download');
    Route::post('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'store'])->name('admin.module_attachment.store');
    Route::put('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'update'])->name('admin.module_attachment.update');
    Route::delete('/admin/module_attachments', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'destroy'])->name('admin.module_attachment.delete');
    Route::get('/admin/module_attachment/{id}/show', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'show'])->name('admin.module_attachment.show');
    Route::get('/admin/module_attachment/{id}/edit', [\App\Http\Controllers\Web\Admin\ModuleAttachmentController::class,'edit'])->name('admin.module_attachment.edit');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'index'])->name('admin.code.index');
    Route::get('/admin/code-parent', [\App\Http\Controllers\Web\Admin\CodeController::class,'parent'])->name('admin.code.parent');
    Route::post('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'store'])->name('admin.code.store');
    Route::post('/admin/code_child', [\App\Http\Controllers\Web\Admin\CodeController::class,'child_store'])->name('admin.code.child_store');
    Route::put('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'update'])->name('admin.code.update');
    Route::delete('/admin/codes', [\App\Http\Controllers\Web\Admin\CodeController::class,'destroy'])->name('admin.code.delete');
    Route::get('/admin/code/{id}/show', [\App\Http\Controllers\Web\Admin\CodeController::class,'show'])->name('admin.code.show');
    Route::get('/admin/code/{id}/edit', [\App\Http\Controllers\Web\Admin\CodeController::class,'edit'])->name('admin.code.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'index'])->name('admin.training.question.index');
    Route::post('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'store'])->name('admin.training.question.store');
    Route::put('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'update'])->name('admin.training.question.update');
    Route::delete('/admin/trainingQuestions', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'destroy'])->name('admin.training.question.delete');
    Route::get('/admin/trainingQuestion/{id}/show', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'show'])->name('admin.training.question.show');
    Route::get('/admin/trainingQuestion/{id}/edit', [\App\Http\Controllers\Web\Admin\TrainingQuestionController::class,'edit'])->name('admin.training.question.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'index'])->name('landing.training.enroll.index');
    Route::post('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'store'])->name('landing.training.enroll.store');
    Route::put('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'update'])->name('landing.training.enroll.update');
    Route::delete('/training/enrolls', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'destroy'])->name('landing.training.enroll.delete');
    Route::get('/training/enroll', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'show'])->name('landing.training.enroll.show');
    Route::get('/training/enroll', [\App\Http\Controllers\Web\Landing\TrainingEnrollController::class,'edit'])->name('landing.training.enroll.edit');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/user/trainings/order', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'order_training'])->name('user.training.mine.order');
    Route::get('/user/trainings/next', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'next_training'])->name('user.training.mine.next');
    Route::get('/user/trainings/current', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'current_training'])->name('user.training.mine.current');
    Route::get('/user/trainings', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'index'])->name('user.training.mine.index');
    Route::get('/user/training/{id}/show', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'show'])->name('user.training.mine.show');
    Route::get('/user/training/{id}/schedule', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'schedule'])->name('user.training.mine.schedule');
    Route::get('/user/training/{id}/pretest', [\App\Http\Controllers\Web\User\TrainingMaineController::class,'pretest'])->name('user.training.mine.pretest');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'index'])->name('admin.question.index');
    Route::post('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'store'])->name('admin.question.store');
    Route::put('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'update'])->name('admin.question.update');
    Route::delete('/admin/questions', [\App\Http\Controllers\Web\Admin\QuestionController::class,'destroy'])->name('admin.question.delete');
    Route::get('/admin/questions/{id}/show', [\App\Http\Controllers\Web\Admin\QuestionController::class,'show'])->name('admin.question.show');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'index'])->name('admin.answer.index');
    Route::post('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'store'])->name('admin.answer.store');
    Route::put('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'update'])->name('admin.answer.update');
    Route::delete('/admin/answers', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'destroy'])->name('admin.answer.delete');
    Route::get('/admin/answer/{id}/show', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'show'])->name('admin.answer.show');
    Route::get('/admin/answer/{id}/edit', [\App\Http\Controllers\Web\Admin\QuestionAnswerController::class,'edit'])->name('admin.answer.edit');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'index'])->name('admin.task.index');
    Route::post('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'store'])->name('admin.task.store');
    Route::put('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'update'])->name('admin.task.update');
    Route::delete('/admin/tasks', [\App\Http\Controllers\Web\Admin\TaskController::class,'destroy'])->name('admin.task.delete');
    Route::get('/admin/task/{id}/show', [\App\Http\Controllers\Web\Admin\TaskController::class,'show'])->name('admin.task.show');
    Route::get('/admin/task/{id}/edit', [\App\Http\Controllers\Web\Admin\TaskController::class,'edit'])->name('admin.task.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/taskAnswer', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'index'])->name('landing.task.enroll');
    Route::get('/taskAnswer/{id}/pretest', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'pretest'])->name('landing.task.pretest');
    Route::get('/taskAnswer/{task_answer_id}/pretest/soal/{enroll_id}', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'list_soal'])->name('landing.task.pretest.soal');
    Route::get('/taskAnswer/{id}/posttest', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'posttest'])->name('landing.task.posttest');
    Route::get('/taskAnswer/{id}/showSoal/{enroll_id}', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'show_soal'])->name('landing.task.show_soal');
    Route::put('/taskAnswer/finish', [\App\Http\Controllers\Web\Landing\TaskAnswerController::class,'task_finish'])->name('landing.task.finish');

});

Route::middleware(['auth'])->group(function () {
    Route::post('/taskAnswerDetail', [\App\Http\Controllers\Web\Landing\TaskAswerDetailController::class,'store'])->name('landing.task.answer.detail.store');
    Route::put('/taskAnswerDetail', [\App\Http\Controllers\Web\Landing\TaskAswerDetailController::class,'update'])->name('landing.task.answer.detail.update');

});

Route::get('/photos', [\App\Http\Controllers\Web\LandingController::class, 'photos'])->name('landing.photos')->middleware('guest');
Route::get('/videos', [\App\Http\Controllers\Web\LandingController::class, 'videos'])->name('landing.videos')->middleware('guest');
Route::get('/faq', [\App\Http\Controllers\Web\LandingController::class, 'faq'])->name('landing.faq')->middleware('guest');
Route::get('/price', [\App\Http\Controllers\Web\LandingController::class, 'price'])->name('landing.price')->middleware('guest');
Route::get('/booking', [\App\Http\Controllers\Web\LandingController::class, 'booking'])->name('landing.booking')->middleware('guest');
Route::get('/contact', [\App\Http\Controllers\Web\LandingController::class, 'contact'])->name('landing.contact');

Route::get('/person/show', [\App\Http\Controllers\Web\LandingController::class, 'person'])->name('landing.person.show')->middleware('guest');
Route::get('/text-area', [\App\Http\Controllers\Web\LandingController::class, 'text'])->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/upload-foto', [\App\Http\Controllers\Web\LandingController::class, 'upload'])->name('landing.upload.foto');
    Route::post('/crop-image-upload', [\App\Http\Controllers\Web\LandingController::class, 'crop'])->name('crop.image.upload.store');
});
Route::get('/pengembangan', [\App\Http\Controllers\Web\LandingController::class, 'pengembangan'])->name('landing.pengembangan');



Route::get('/admin/event/create', [\App\Http\Controllers\Web\LandingController::class, 'ckeditor'])->name('admin.events.create')->middleware('guest');
Route::get('/stroke/knn', [\App\Http\Controllers\Web\LandingController::class, 'knn'])->name('stroke.knn')->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'index'])->name('admin.user.index');
    Route::get('/admin/user/{id}/show', [\App\Http\Controllers\Web\Admin\UserController::class,'show'])->name('admin.user.show');
    Route::post('/admin/users', [\App\Http\Controllers\Web\Admin\UserController::class,'store'])->name('admin.user.store');

    Route::get('/user/profile', [\App\Http\Controllers\Web\User\UserProfileController::class,'index'])->name('user.profile.index');
    Route::get('/user/profile/edit', [\App\Http\Controllers\Web\User\UserProfileController::class,'edit'])->name('user.profile.edit');
    Route::put('/user/profile/update', [\App\Http\Controllers\Web\User\UserProfileController::class,'update'])->name('user.profile.update');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/pendidikan', [\App\Http\Controllers\Web\User\PendidikanController::class,'index'])->name('user.pendidikan');
    Route::post('/user/pendidikan', [\App\Http\Controllers\Web\User\PendidikanController::class,'store'])->name('user.pendidikan.store');
    Route::get('/user/pendidikan/{id}/show', [\App\Http\Controllers\Web\User\PendidikanController::class,'show'])->name('user.pendidikan.show');


    Route::get('/user/profile/pekerjaan', [\App\Http\Controllers\Web\User\UserProfileController::class,'pekerjaan'])->name('user.profile.pekerjaan');
    Route::get('/user/profile/pelatihan', [\App\Http\Controllers\Web\User\UserProfileController::class,'pelatihan'])->name('user.profile.pelatihan');
    Route::get('/user/profile/organisasi', [\App\Http\Controllers\Web\User\UserProfileController::class,'organisasi'])->name('user.profile.organisasi');
    Route::get('/user/profile/alamat', [\App\Http\Controllers\Web\User\UserProfileController::class,'alamat'])->name('user.profile.alamat');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'index'])->name('landing.profile');
    Route::put('/profile', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'update'])->name('landing.profile.update');
    Route::post('/profile/update/foto', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'update_foto'])->name('landing.profile.update.foto');
    Route::get('/profile/update', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'edit'])->name('landing.profile.edit');
    Route::get('/profile/update/foto/crop', [\App\Http\Controllers\Web\Landing\ProfileController::class, 'upload_foto_crop'])->name('landing.profile.upload.foto.crop');
});

Route::get('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'index'])->name('user.file.index');
Route::post('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'store'])->name('user.file.store');
Route::post('user/files/external', [\App\Http\Controllers\Web\User\UserFileController::class,'store_external'])->name('user.file.store.external');
Route::get('user/file/{id}/view', [\App\Http\Controllers\Web\User\UserFileController::class,'view'])->name('user.file.show.view');
Route::get('user/file/{id}/show', [\App\Http\Controllers\Web\User\UserFileController::class,'show'])->name('user.file.show');
Route::delete('user/files', [\App\Http\Controllers\Web\User\UserFileController::class,'destroy'])->name('user.file.delete');

Route::get('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'index'])->name('admin.schedule.index');
Route::post('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'store'])->name('admin.schedule.store');
Route::put('admin/schedules', [\App\Http\Controllers\Web\Admin\ScheduleController::class, 'update'])->name('admin.schedule.update');


Route::get('/admin/hipeni', [HipeniController::class, 'index'])->name('hipeni.index')->middleware('auth');
Route::get('/admin/hipeni', [HipeniController::class, 'index'])->name('hipeni.index')->middleware('auth');
Route::post('/admin/hipeni/store', [HipeniController::class, 'store'])->name('hipeni.store')->middleware('auth');


Route::get('/admin/hipeni/enroll', [\App\Http\Controllers\Web\Admin\EnrollController::class, 'index'])->name('enroll.index')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/niras', [\App\Http\Controllers\Web\Admin\NiraController::class,'index'])->name('admin.nira.index');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/trainings', [\App\Http\Controllers\Web\Admin\TrainingController::class,'index'])->name('admin.training.index');
    Route::get('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'create'])->name('admin.training.create');
    Route::post('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'store'])->name('admin.training.store');
    Route::put('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'update'])->name('admin.training.update');
    Route::delete('/admin/training', [\App\Http\Controllers\Web\Admin\TrainingController::class,'destroy'])->name('admin.training.destroy');
    Route::get('/admin/training/{slug}/show', [\App\Http\Controllers\Web\Admin\TrainingController::class,'show'])->name('admin.training.show');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/webs', [\App\Http\Controllers\Web\Admin\WebController::class,'index'])->name('admin.web.index');
    Route::post('/admin/webs', [\App\Http\Controllers\Web\Admin\WebController::class,'store'])->name('admin.web.store');
    Route::get('/admin/web/{id}/show', [\App\Http\Controllers\Web\Admin\WebController::class,'show'])->name('admin.web.show');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/userRoles', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'index'])->name('admin.user_role.index');
    Route::get('/admin/userRole/{id}/show', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'show'])->name('admin.user_role.show');
    Route::post('/admin/userRoles', [\App\Http\Controllers\Web\Admin\UserRoleController::class,'store'])->name('admin.user_role.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/news', [\App\Http\Controllers\Web\Admin\NewsController::class,'index'])->name('admin.news.index');
    Route::get('/admin/news/create', [\App\Http\Controllers\Web\Admin\NewsController::class,'create'])->name('admin.news.create');
    Route::post('/admin/news', [\App\Http\Controllers\Web\Admin\NewsController::class,'store'])->name('admin.news.store');

});

