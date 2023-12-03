<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\CurriculumVersion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
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
