<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopicEvent;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(){
        $topic = TopicEvent::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Class Event All',
            'topic'         => $topic
        ];
        return view('admin.topic.index', $data);
    }
}
