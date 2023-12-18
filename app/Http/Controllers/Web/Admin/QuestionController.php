<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\TaskAnswerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index(){

    }
    public function show($id){
        $question = Question::find($id);
        $answer = $question->answer()->get();
        $data = [
            'class'             => 'Training Question',
            'sub_class'         => 'Index',
            'title'             => 'Training Question All',
            'question'          => $question,
            'answer'            => $answer
        ];
        return view('admin.question.show', $data);
    }
    public function store(Request $request){
        $data = $request->all();
        $data['user_id'] = Auth::id();
//        dd($data);
        $question = new Question();
        $create = $question->create($data);
        if($create){
            Session::flash('success', 'New training created');
        }else{
            Session::flash('danger', 'New training created');
        }
        return redirect()->back();
    }
    public function update(Request $request){
        $data = $request->all();
        $question = Question::find($request->id);
        $task_answer_detail = TaskAnswerDetail::where('question_id',$question->id);
//        dd($data);
        $update = $question->update($data);
        if($update ){
            $update_answer_detail = $task_answer_detail->update([
                'youtube_id_video' => $request->youtube_id_video
            ]);
            Session::flash('success', 'Soal berhasil diupdate');
        }else{
            Session::flash('danger', 'Soal gagal diupdate');
        }
        return redirect()->back();

    }
    public function destroy(Request $request){
        $data = $request->all();
//        dd($data);
        $question = Question::find($request->id);
        $delete= $question->delete();
        if($delete ){
            Session::flash('success', 'Soal berhasil dihapus');
        }else{
            Session::flash('danger', 'Soal gagal dihapus');
        }
        return redirect()->route('admin.training.question.show', ['id'=>$question->training_question->id]);
    }
}
