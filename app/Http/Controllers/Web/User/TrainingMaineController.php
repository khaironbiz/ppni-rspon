<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Code;
use App\Models\Curriculum;
use App\Models\Schedule;
use App\Models\Task;
use App\Models\TrainingEnroll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingMaineController extends Controller
{
    public function index(){
        $trainings = TrainingEnroll::where('user_id', Auth::id())->get();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'My Training',
            'enrolls'       => $trainings
        ];
        return view('user.training.index', $data);

    }
    public function show($id){
        $enroll                 = TrainingEnroll::find($id);
        $kurikulum_version_id   = $enroll->class->curriculum_version_id;
        $kurikulum              = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->get();
        $materi_dasar           = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Dasar')->get();
        $materi_inti            = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Inti')->get();
        $materi_penunjang       = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Penunjang')->get();
//        dd($kurikulum);
        $data = [
            'class'             => 'Training',
            'sub_class'         => 'Show',
            'title'             => 'Informasi Pelatihan',
            'training'          => $enroll,
            'kurikulum'         => $kurikulum,
            'materi_dasar'      => $materi_dasar,
            'materi_inti'       => $materi_inti,
            'materi_penunjang'  => $materi_penunjang
        ];
        return view('user.training.show', $data);
    }
    public function schedule($enroll_id){
        $enroll         = TrainingEnroll::find($enroll_id);
        $schedules      = Schedule::where('class_event_id', $enroll->class_event_id)->get();
        $users          = User::all();
        $data = [
            'class'             => 'Training',
            'sub_class'         => 'Show',
            'title'             => 'Jadwal Acara',
            'training'          => $enroll,
            'schedules'         => $schedules,
            'users'             => $users
        ];
        return view('user.training.schedule', $data);
    }
    public function pretest($enroll_id){
        $pre_test_code  = Code::where('code', 'pre-test')->first();
        $enroll         = TrainingEnroll::find($enroll_id);
        $pre_test       = Task::where([
            'class_event_id'=> $enroll->class_event_id,
            'jenis_tugas'   => $pre_test_code->id
        ])->get();

        $data = [
            'class'             => 'Training',
            'sub_class'         => 'Show',
            'title'             => 'Informasi Pelatihan',
            'training'          => $enroll,
            'pre_test'          => $pre_test
        ];
        return view('user.training.pretest', $data);
    }
    public function current_training(){

        $trainings = TrainingEnroll::where('user_id', Auth::id())->get();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Current',
            'title'         => 'Current Training',
            'enrolls'       => $trainings->where('class.date_finish', '>=', date('Y-m-d'))->where('class.date_start', '<=', date('Y-m-d'))->where('status', 'success')
        ];
        return view('user.training.index', $data);
    }
    public function next_training(){
        $trainings = TrainingEnroll::where('user_id', Auth::id())->get();
//        dd($trainings);
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Next',
            'title'         => 'Next Training',
            'enrolls'       => $trainings->where('class.date_start', '>', date('Y-m-d'))->where('status', 'success')
        ];
        return view('user.training.index', $data);
    }
    public function order_training(){
        $trainings = TrainingEnroll::where('user_id', Auth::id())->get();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Pending',
            'title'         => 'Order Training',
            'enrolls'       => $trainings->where('class.date_start', '>=', date('Y-m-d'))->where('status', 'pending')
        ];
        return view('user.training.index', $data);
    }
}
