<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Module;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){
        $schedules  = Schedule::all();
        $class      = ClassEvent::all();
        $data = [
            'class'         => 'Schedules',
            'sub_class'     => 'Index',
            'title'         => 'Show All Schedules',
            'schedules'     => $schedules,
            'class_event'   => $class
        ];
        return view('admin.schedule.index', $data);

    }
    public function show_by_class_id($class_id){

    }
    public function show_by_user_id($user_id){

    }
    public function store(Request $request){
        $post = $request->all();
        $post['finish'] = date('Y-m-d H:i:s',strtotime($request->start)+(60*(int)$request->durasi));
        $schedule = new Schedule();
        $create = $schedule->create($post);
        if($create){
            return back()->with('success', 'Data berhasil disimpan');
        }
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
