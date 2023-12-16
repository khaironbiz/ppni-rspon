<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Code;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index(){
        $jenis_tugas_id = Code::where('code','task')->first();
        $jenis_tugas    = Code::where('parent_id',$jenis_tugas_id->id)->get();
        $class          = ClassEvent::all();
        $task           = Task::all();
        $pelatih        = User::all();
        $data = [
            'class'         => 'Task',
            'sub_class'     => 'Index',
            'title'         => 'All Task',
            'task'          => $task,
            'jenis_tugas'   => $jenis_tugas,
            'class_event'   => $class,
            'pelatih'       => $pelatih
        ];
        return view('admin.task.index', $data);
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function store(Request $request){
        $data       = $request->all();
        $training   = ClassEvent::find($request->class_event_id);
        $data['training_id']    = $training->training_id;
//        dd($data);
        $task       = new Task();

        $create     = $task->create($data);
        if($create){
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->back();

    }
    public function update(Request $request){

    }
    public function destroy(Request $request){

    }

}
