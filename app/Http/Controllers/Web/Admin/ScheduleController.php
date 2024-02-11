<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Module;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::all();
        $data = [
            'class'         => 'Schedules',
            'sub_class'     => 'Index',
            'title'         => 'Show All Schedules',
            'schedules'     => $schedules
        ];
        return view('admin.schedule.index', $data);

    }
    public function show_by_class_id($class_id){

    }
    public function show_by_user_id($user_id){

    }
    public function store(Request $request){
        $class_event_id = $request->class_event_id;
        $class_event    = ClassEvent::find($class_event_id);
        $training_id    = $class_event->training_id;
        $module         = Module::where('training_id', $training_id)->get();

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
