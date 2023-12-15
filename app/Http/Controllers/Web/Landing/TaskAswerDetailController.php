<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\TaskAnswer;
use App\Models\TaskAnswerDetail;
use App\Models\TaskAswerDetail;
use App\Models\TrainingEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaskAswerDetailController extends Controller
{
    public function store(Request $request)
    {
        $question = Question::find($request->question_id);
        $task_answer = TaskAnswer::find($request->task_answer_id);
//        dd ($request->all());
        if($question->id_jawaban != $request->id_jawaban){
            $hasil = false;
        }else{
            $hasil = true;
        }
        $data = [
            'user_id'           => Auth::id(),
            'task_answer_id'    => $task_answer->id,
            'question_id'       => $question->id,
            'id_jawaban'        => $request->id_jawaban,
            'correct'           => $hasil,
            'curriculum_id'     => $question->curriculum_id
        ];
//        dd($data);
        $task_answer_detail = new TaskAnswerDetail();
        $create     = $task_answer_detail->create($data);
        if($create){
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->route('landing.task.pretest.soal',['task_answer_id'=>$task_answer->id, 'enroll_id'=>$request->training_enroll_id]);
    }
    public function update(Request $request)
    {
        $training_enroll = TrainingEnroll::find($request->training_enroll_id);
//        dd ($training_enroll);
        $task_answer_detail = TaskAnswerDetail::find($request->task_answer_detail_id);
//        dd($task_answer_detail);
        $question = Question::find($task_answer_detail->question_id);
        if($question->id_jawaban != $request->id_jawaban){
            $hasil = false;
        }else{
            $hasil = true;
        }
        $data = [
            'id_jawaban'    => $request->id_jawaban,
            'correct'       => $hasil
        ];
//        dd($data);
        $update = $task_answer_detail->update($data);
        if($update){
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->route('landing.task.pretest',['id'=>$request->training_enroll_id]);
    }
}
