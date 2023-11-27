<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectStudy;
use Illuminate\Http\Request;

class SubjectStudyController extends Controller
{
    public function index(){
        $subject_study = SubjectStudy::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Class Event All',
            'subject_study'    => $subject_study
        ];
        return view('admin.subject_study.index', $data);
    }
    public function create(){
        $subject_study = SubjectStudy::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Class Event All',
            'subject_study'    => $subject_study
        ];
        return view('admin.subject_study.index', $data);
    }
    public function store(){

    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
