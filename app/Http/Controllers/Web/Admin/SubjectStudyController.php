<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\EventTopic;
use App\Models\SubjectStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubjectStudyController extends Controller
{
    public function index(){
        $subject_study = SubjectStudy::all();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Subject Study',
            'title'         => 'Subject Study All',
            'subject_study'    => $subject_study
        ];
        return view('admin.subject_study.index', $data);
    }
    public function create(){
        $class_event = ClassEvent::all();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Subject Study',
            'title'         => 'Create Mata Ajar',
            'class_event'   => $class_event
        ];
        return view('admin.subject_study.create', $data);
    }
    public function store(Request $request){
        $post_data = $request->all();
        $post_data['pengampu']=1;
        $post_data['kode_mata_ajar']=1;
        $subject_study = new SubjectStudy();
        $create         = $subject_study->create($post_data);
        if($create){
            Session::flash('success', 'Sukses membuat mata ajar baru');
        }else{
            Session::flash('danger', 'Gagal membuat mata ajar baru');
        }
        return redirect()->route('admin.subjectStudy.index');
    }
    public function show($slug){
        $subject_study = SubjectStudy::where('slug', $slug)->first();
        $topics = $subject_study->topic;
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Subject Study',
            'title'         => 'Show Subject Study',
            'subject_study' => $subject_study,
            'topics'        => $topics
        ];
//        dd($topics);
        return view('admin.subject_study.show', $data);
    }
    public function edit($slug){
        $subject_study = SubjectStudy::where('slug', $slug)->first();
        $data = [
            'class'         => 'Subject Study',
            'sub_class'     => 'Show',
            'title'         => 'Show Subject Study',
            'subject_study' => $subject_study
        ];
        return view('admin.subject_study.edit', $data);
    }
    public function update(Request $request){
        $slug           = $request->slug;
        $subjectStudy   = SubjectStudy::where('slug', $slug)->first();
        $data_update    = [
            'class_event_id'    => $request->class_event_id,
            'title'             => $request->title
        ];
//        dd($subjectStudy);
        $update = $subjectStudy->update($request->all());
        if($update){
            Session::flash('success', 'Sukses update data');
        }else{
            Session::flash('danger', 'Gagal update data');
        }
        return redirect()->route('admin.subjectStudy.index');

    }
    public function destroy(Request $request){
        $slug = $request->slug;
        $delete = SubjectStudy::where('slug', $slug)->delete();
        if($delete){
            Session::flash('success', 'Sukses menghapus data');
        }else{
            Session::flash('danger', 'Gagal menghapus data');
        }
        return redirect()->route('admin.subjectStudy.index');
    }
}
