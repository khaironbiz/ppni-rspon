<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventTopic;
use App\Models\SubjectStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TopicController extends Controller
{
    public function index(){
        $topics = EventTopic::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Topic',
            'title'         => 'Event Topic All',
            'topics'        => $topics
        ];
        return view('admin.topic.index', $data);
    }
    public function create(){
        $subjectStudy = SubjectStudy::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Topic',
            'title'         => 'Create New Topic',
            'subject_study' => $subjectStudy
        ];
        return view('admin.topic.create', $data);
    }
    public function store(Request $request){
        $data_post = $request->all();
//        dd($data_post);
        $topic = new EventTopic();
        $create = $topic->create($data_post);
        if($create){
            Session::flash('success', 'Sukses membuat topik baru');
        }else{
            Session::flash('danger', 'Gagal membuat topik baru');
        }
        return redirect()->route('admin.topic.index');
    }
    public function show($slug){
        $topic = EventTopic::where('slug', $slug)->first();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Topic',
            'title'         => 'Create New Topic',
            'topic'         => $topic
        ];
        return view('admin.topic.show', $data);
    }
    public function destroy(Request $request){
        $delete = EventTopic::where('slug', $request->slug)->delete();
        if($delete){
            Session::flash('success', 'Sukses menghapus data');
        }else{
            Session::flash('danger', 'Gagal menghapus data');
        }
        return redirect()->route('admin.topic.index');
    }
}
