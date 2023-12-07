<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\CurriculumVersion;
use App\Models\TrainingEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function index(){
        $enroll = TrainingEnroll::where([
            'user_id'       => Auth::id(),
            'status'        => 'success'
        ])->get();
        $data = [
            'title'         => 'Training',
            'class'         => 'E-Module',
            'enroll'        => $enroll
        ];
        return view('landing.module/enroll', $data);
    }
    public function show($id){
        $enroll             = TrainingEnroll::find($id);
        $training           = $enroll->training;
        $curriculum_version = $training->curriculumVersion()->first();
        $curriculums        = $curriculum_version->curriculum()->get();
//        dd($curriculum_version);
        $data = [
            'title'         => $training->title,
            'class'         => 'E-Module',
            'version'       => $curriculum_version,
            'curriculums'   => $curriculums
        ];
        return view('landing.module/index', $data);
    }
    public function versi($slug){
        $curriculum_version = CurriculumVersion::where('slug', $slug)->first();
        $curriculums = $curriculum_version->curriculum()->get();
//        dd($curriculum);
        $data = [
            'title'         => 'NIHSS',
            'class'         => 'E-Module',
            'version'       => $curriculum_version,
            'curriculums'   => $curriculums
        ];
        return view('landing.module/index', $data);
    }
    public function canva($slug){

        $curriculum = Curriculum::where('slug', $slug)->first();
//        dd($curriculum);
        $data = [
            'title'         => 'NIHSS',
            'class'         => 'E-Module',
            'curriculum'   => $curriculum
        ];
        return view('landing.module/canva', $data);
    }
}
