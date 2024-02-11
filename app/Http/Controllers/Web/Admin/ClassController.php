<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Code;
use App\Models\Curriculum;
use App\Models\CurriculumVersion;
use App\Models\Event;
use App\Models\File;
use App\Models\Schedule;
use App\Models\SubjectStudy;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClassController extends Controller
{
    public function index(){
        $class = ClassEvent::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Class Event All',
            'classEvent'    => $class
        ];
        return view('admin.class.index', $data);
    }
    public function create(){
        $versi_kurikulum = CurriculumVersion::all();
        $file       = File::where('user_id', Auth::id())->wherein('extention',['png','jpg'])->get();
        $events     = Event::all();
        $trainings  = Training::all();
        $users      = User::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Create Class',
            'title'         => 'Create New Class',
            'events'        => $events,
            'trainings'     => $trainings,
            'file'          => $file,
            'users'         => $users,
            'versi_kurikulum'   => $versi_kurikulum,
        ];
        return view('admin.class.create', $data);
    }
    public function store(Request $request){
        $class = new ClassEvent();
        $data_class = $request->all();
        $create = $class->create($data_class);
        if($create){
            Session::flash('success', 'Success create class');
            return redirect()->route('admin.class.index');
        }

    }
    public function show($slug){
        $class                  = ClassEvent::where('slug', $slug)->first();
        $mata_ajar              = SubjectStudy::where('class_event_id', $class->id)->get();
        $kurikulum_version_id  = $class->curriculum_version_id;
        $kurikulum              = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->get();
        $materi_dasar           = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Dasar')->get();
        $materi_inti            = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Inti')->get();
        $materi_penunjang       = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Penunjang')->get();
        $users                  = User::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Show Class Event',
            'class_event'   => $class,
            'kurikulum'         => $kurikulum,
            'materi_dasar'      => $materi_dasar,
            'materi_inti'       => $materi_inti,
            'materi_penunjang'  => $materi_penunjang,
            'users'             => $users
        ];
        return view('admin.class.show', $data);
    }
    public function mata_ajar($slug){
        $class                  = ClassEvent::where('slug', $slug)->first();
        $mata_ajar              = SubjectStudy::where('class_event_id', $class->id)->get();
        $kurikulum_version_id  = $class->curriculum_version_id;
        $jenis_materi_kurikulum = Code::where('code', 'jenis-materi-kurikulum')->first();
        $kurikulum              = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->get();
        $materi_dasar           = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Dasar')->get();
        $materi_inti            = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Inti')->get();
        $materi_penunjang       = Curriculum::where('curriculum_version_id', $kurikulum_version_id)->where('type', 'Materi Penunjang')->get();
        $users                  = User::all();
        $data = [
            'class'         => 'Class',
            'sub_class'     => 'Mata Ajar',
            'title'         => 'Mata Ajar Kelas',
            'class_event'   => $class,
            'kurikulum'         => $kurikulum,
            'materi_dasar'      => $materi_dasar,
            'materi_inti'       => $materi_inti,
            'materi_penunjang'  => $materi_penunjang,
            'users'             => $users
        ];
        return view('admin.class.mata_ajar', $data);
    }
    public function jadwal($slug){
        $class                  = ClassEvent::where('slug', $slug)->first();
        $schedules              = Schedule::where('class_event_id', $class->id)->orderBy('start', 'ASC')->get();
        $users                  = User::all();
        $data = [
            'class'         => 'Class',
            'sub_class'     => 'Schedules',
            'title'         => 'Jadwal Acara',
            'class_event'   => $class,
            'users'         => $users,
            'schedules'     => $schedules
        ];
        return view('admin.class.jadwal', $data);
    }

    public function edit($slug){
        $class = ClassEvent::where('slug', $slug)->first();
        $versi_kurikulum = CurriculumVersion::where('training_id', $class->training_id)->get();
        $file       = File::where('user_id', Auth::id())->wherein('extention',['png','jpg'])->get();
        $users      = User::all();
        $data = [
            'class'             => 'Event',
            'sub_class'         => 'Class',
            'title'             => 'Show Class Event',
            'class_event'       => $class,
            'versi_kurikulum'   => $versi_kurikulum,
            'file'              => $file,
            'users'             => $users
        ];
        return view('admin.class.edit', $data);
    }
    public function update(Request $request){
        $data_request   = $request->all();
        $class_slug     = $request->class_slug;
        $class          = ClassEvent::where('slug', $class_slug)->first();
        $update         = $class->update($data_request);
        if(empty($class)){
            Session::flash('danger', 'Wrong slug class');
        }elseif($update){
            Session::flash('success', 'Success class updated');
        }else{
            Session::flash('danger', 'Gagal update');

        }
        return redirect()->route('admin.class.index');
    }
    public function destroy(Request $request){
        $class_slug = $request->class_slug;
        $class      = ClassEvent::where('slug', $class_slug)->first();
        $delete     = $class->delete();
        if($delete){
            Session::flash('success', 'Success class deleted');
            return redirect()->route('admin.class.index');
        }else{
            Session::flash('danger', 'Class failed delete');
            return redirect()->route('admin.class.index');
        }

    }
}
