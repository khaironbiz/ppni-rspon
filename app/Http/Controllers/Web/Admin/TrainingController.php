<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrainingController extends Controller
{
    public function index(){
        $trainings = Training::all();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'Training All',
            'trainings'     => $trainings
        ];
        return view('admin.training.index', $data);
    }
    public function create(){
        $trainings = Training::all();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'Training All',
            'trainings'     => $trainings
        ];
        return view('admin.training.create', $data);
    }
    public function store(Request $request){
        $data       = $request->all();
        $training   = new Training();
        $create     = $training->create($data);
        if($create){
            Session::flash('success', 'New training created');
        }else{
            Session::flash('danger', 'New training created');
        }
        return redirect()->route('admin.training.index');
    }
    public function update(Request $request){
        $training   = Training::where('slug', $request->slug)->first();
        $update     = $training->update($request->all());
        if($update){
            Session::flash('success', 'Training updated');
        }else{
            Session::flash('danger', 'Training filed update');
        }
        return redirect()->route('admin.training.index');
    }
    public function destroy(Request $request){

    }
}
