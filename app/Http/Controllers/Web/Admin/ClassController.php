<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Event;
use Illuminate\Http\Request;

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
        $events = Event::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Create Class',
            'title'         => 'Create New Class',
            'events'        => $events
        ];
        return view('admin.class.create', $data);
    }
    public function store(Request $request){
        $class = new ClassEvent();
        $data_class = $request->all();
        $create = $class->create($data_class);
        if($create){
            session('success', 'Success create class');
            return redirect()->route('admin.class.index');
        }

    }
}
