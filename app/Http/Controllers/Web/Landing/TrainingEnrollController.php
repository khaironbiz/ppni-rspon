<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\SubjectStudy;
use App\Models\TrainingEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TrainingEnrollController extends Controller
{
    public function index(){

    }
    public function show($id){

    }
    public function store(Request $request){
        $class_event = ClassEvent::find($request->id);
        if($class_event->price == null){
            $status = "success";
        }else{
            $status = "pending";
        }
        $data_input = [
            'user_id'           => Auth::id(),
            'class_event_id'    => $class_event->id,
            'training_id'       => $class_event->training_id,
            'price'             => $class_event->price,
            'status'            => $status
        ];

        $training_enroll        = new TrainingEnroll();
        $create                 = $training_enroll->create($data_input);
        if($create){
            return back()->with('success', 'Sukses mendaftar pelatihan ini');
        }else{
            return back()->with('danger', 'Gagal mendaftar pelatihan ini');
        }

    }
    public function update(Request $request){

    }
    public function edit($id){

    }
    public function destroy(Request $request){

    }
}
