<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Event;
use App\Models\SubjectStudy;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        $events     = Event::all();
        $trainings  = Training::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Create Class',
            'title'         => 'Create New Class',
            'events'        => $events,
            'trainings'     => $trainings
        ];
        return view('admin.class.create', $data);
    }
    public function store(Request $request){
        $class = new ClassEvent();
        $data_class = $request->all();
        $create = $class->create($data_class);
        if($create){
            Session::flash('success', 'Success create class');
            return redirect()->route('admin.class.index');
        }

    }
    public function show($slug){
        $class = ClassEvent::where('slug', $slug)->first();
        $mata_ajar = SubjectStudy::where('class_event_id', $class->id)->get();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Show Class Event',
            'class_event'   => $class,
            'mata_ajar'     => $mata_ajar
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
    public function update(Request $request){
//        dd($request->file('file'));
        $file       = $request->file('file');
        $data_request = $request->all();
        $class_slug = $request->class_slug;
        $class      = ClassEvent::where('slug', $class_slug)->first();
        if(!empty($request->file('file'))){
            $file       = $request->file('file');
            $result     = Storage::disk('s3')->putFileAs('latihan', $file, $file->hashName(),'public');
            $url        = Storage::disk('s3')->url($result);
            $data_file  = [
                'file_name' => $file->hashName(),
                'extention' => $file->getClientOriginalExtension(),
                'file_type' => $file->getType(),
                'size'      => $file->getSize(),
                'url'       => url($url)
            ];

            $data_request['file']=  url($url);
        }

        $update     = $class->update($data_request);
        if(empty($class)){
            Session::flash('danger', 'Wrong slug class');
        }elseif($update){
            Session::flash('success', 'Success class updated');
        }else{
            Session::flash('danger', 'Gagal update');

        }
        return redirect()->route('admin.class.index');
    }
    public function destroy(Request $request){
        $class_slug = $request->class_slug;
        $class      = ClassEvent::where('slug', $class_slug)->first();
        $delete     = $class->delete();
        if($delete){
            Session::flash('success', 'Success class deleted');
            return redirect()->route('admin.class.index');
        }else{
            Session::flash('danger', 'Class failed delete');
            return redirect()->route('admin.class.index');
        }

    }
}
