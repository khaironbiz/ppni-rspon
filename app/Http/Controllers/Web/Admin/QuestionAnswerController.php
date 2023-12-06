<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionAnswerController extends Controller
{
    public function index(){

    }
    public function show($id){
        $question_answer = QuestionAnswer::find($id);
//        dd($answer);
        $data = [
            'class'             => 'Question',
            'sub_class'         => 'Show',
            'title'             => 'Question Show',
            'question_answer'   => $question_answer
        ];
        return view('admin.question_answer.show', $data);
    }

    public function edit(){

    }
    public function update(Request $request){
        $data = $request->all();
        $question_answer = QuestionAnswer::find($request->id);
        $update = $question_answer->update($data);
        if($update ){
            Session::flash('success', 'Soal berhasil diupdate');
        }else{
            Session::flash('danger', 'Soal gagal diupdate');
        }
        return redirect()->back();

    }
    public function store(Request $request){
        $data = $request->all();
        $answer = new QuestionAnswer();
        $create = $answer->create($data);
        return redirect()->back();
    }
    public function destroy(Request $request){
        $answer = QuestionAnswer::find($request->id);
        $delete = $answer->delete();
        if($delete){
            Session::flash('success', 'Jawaban berhasil dihapus');
        }else{
            Session::flash('danger', 'Jawaban gagal dihapus');
        }
        return redirect()->route('admin.question.show',['id'=>$answer->question->id]);
    }
}
