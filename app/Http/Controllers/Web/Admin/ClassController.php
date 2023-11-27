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
    public function show($slug){
        $class = ClassEvent::where('slug', $slug)->first();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Show Class Event',
            'class_event'   => $class
        ];
        return view('admin.class.show', $data);
    }
    public function edit($slug){
        $class = ClassEvent::where('slug', $slug)->first();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Show Class Event',
            'class_event'   => $class
        ];
        return view('admin.class.edit', $data);
    }
    public function destroy(Request $request){
        $class_slug = $request->class_slug;
        $class      = ClassEvent::where('slug', $class_slug)->first();
        $delete     = $class->delete();
        if($delete){
            session('success', 'Success class deleted');
            return redirect()->route('admin.class.index');
        }else{
            session('danger', 'Class failed delete');
            return redirect()->route('admin.class.index');
        }

    }
}
