<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Training;
use App\Models\TrainingQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TrainingQuestionController extends Controller
{
    public function index(){
        $trainingQuestion   = TrainingQuestion::all();
        $trainings          = Training::all();
        $data = [
            'class'             => 'Training Question',
            'sub_class'         => 'Index',
            'title'             => 'Training Question All',
            'trainingQuestion'  => $trainingQuestion,
            'trainings'         => $trainings
        ];
        return view('admin.training_question.index', $data);

    }
    public function show($id){
        $training_question = TrainingQuestion::find($id);
        $question = Question::all();
        $data = [
            'class'             => 'Training Question',
            'sub_class'         => 'Index',
            'title'             => 'Training Question All',
            'trainingQuestion'  => $training_question,
            'question'          => $question
        ];
        return view('admin.training_question.show', $data);

    }

    public function store(Request $request){
        $training = Training::find($request->training_id);
        $data = $request->all();
        $data['user_id']= Auth::id();
//        dd($data);
        $training_question = new TrainingQuestion();
        $create=$training_question->create($data);
        if($create){
            Session::flash('success', 'Data baru sukses dibuat');
        }else{
            Session::flash('danger', 'Data baru gagal dibuat');
        }
        return redirect()->route('admin.training.show', ['slug'=>$training->slug]);
    }

    public function update(Request $request){
        $training_question = TrainingQuestion::find($request->id);
//        dd($training_question);
        $data = $request->all();
        $update = $training_question->update($data);
        if($update){
            Session::flash('success', 'Data baru sukses dibuat');
        }else{
            Session::flash('danger', 'Data baru gagal dibuat');
        }
        return redirect()->back();

    }
    public function destroy(){

    }
}
