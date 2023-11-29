<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventTopic;
use App\Models\SubjectStudy;

class TopicController extends Controller
{
    public function index(){
        $topic = EventTopic::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Topic',
            'title'         => 'Event Topic All',
            'topic'         => $topic
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
}
