<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurriculumVersion;
use App\Models\Training;
use App\Models\TrainingQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function show($slug){
        $training           = Training::where('slug', $slug)->first();
        $curriculumVersion  = CurriculumVersion::where('training_id', $training->id)->get();
        $training_question  = TrainingQuestion::where('training_id', $training->id)->get();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'Training All',
            'training'      => $training,
            'curriculumVersion' => $curriculumVersion,
            'training_question' => $training_question
        ];
        return view('admin.training.show', $data);
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
        $data['user_id']= Auth::id();
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
        $training   = Training::find($request->id);
        $update     = $training->update($request->all());
        if($update){
            Session::flash('success', 'Training updated');
        }else{
            Session::flash('danger', 'Training filed update');
        }
        return redirect()->route('admin.training.index');
    }
    public function destroy(Request $request){
        $training_id = $request->id;
        $training = Training::find($training_id);
        if(empty($training)){
            Session::flash('danger', 'Training not found');
        }else{
            $delete     = $training->delete();
            $delete_    = $training->curriculumVersion()->delete();
            if($delete){
                Session::flash('success', 'Training deleted');
            }else{
                Session::flash('danger', 'Training filed delete');
            }
        }

        return redirect()->route('admin.training.index');
    }
}
