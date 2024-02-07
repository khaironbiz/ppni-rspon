<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\TrainingEnroll;
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
}
