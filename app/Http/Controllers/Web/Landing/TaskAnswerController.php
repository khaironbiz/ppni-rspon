<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Admin\TaskController;
use App\Models\Code;
use App\Models\Question;
use App\Models\Task;
use App\Models\TaskAnswer;
use App\Models\Training;
use App\Models\TrainingEnroll;
use App\Models\TrainingQuestion;
use Illuminate\Support\Facades\Auth;

class TaskAnswerController extends Controller
{
    public function index(){
        $enroll = TrainingEnroll::where([
            'user_id'       => Auth::id(),
            'status'        => 'success'
        ])->get();
        $data = [
            'title'         => 'Training',
            'class'         => 'Pre Test',
            'enroll'        => $enroll
        ];
        return view('landing.task_answer.enroll', $data);

    }
    public function pretest($id){
        $enroll     = TrainingEnroll::find($id);
        $pretest    = Code::where('code', 'pre-test')->first();
        $task       = Task::where([
            'training_id'   => $enroll->training_id,
            'jenis_tugas'   => $pretest->id
        ])->first();
        $task_answer = TaskAnswer::where([
            'task_id'       => $task->id,
            'jenis_tugas'   => $pretest->id
        ]);

        if($task_answer->count() < 1){
            $data = [
                'task_id'       => $task->id,
                'training_id'   => $enroll->training_id,
                'class_event_id'    => $task->class_event_id,
                'student_id'    => Auth::id(),
                'jenis_tugas'   => $pretest->id,
                'date_start'    => date('Y-m-d')
            ];
            $create_answer  = new TaskAnswer();
            $create = $create_answer->create($data);
        }
        $training_question = TrainingQuestion::where('training_id', $enroll->training_id)->first();
        $question = Question::where('training_question_id', $training_question->id)->get();
        $data = [
            'title'             => 'Training',
            'class'             => 'Pre Test',
            'task'              => $task,
            'task_answer'       => $task_answer->first(),
            'question'          => $question,
            'training_enroll'   => $enroll
        ];
//        dd($data);
        return view('landing.task_answer.task', $data);

    }
    public function posttest($id){
        $enroll = TrainingEnroll::find($id);
        $posttest = Code::where('code', 'post-test')->first();
        $task = Task::where([
            'training_id'   => $enroll->training_id,
            'jenis_tugas'   => $posttest->id
        ])->first();
        $training_question = TrainingQuestion::where('training_id', $enroll->training_id)->first();
        $question = Question::where('training_question_id', $training_question->id)->get();
//        dd($pretest);
        $data = [
            'title'     => 'Training',
            'class'     => 'Post Test',
            'task'      => $task,
            'question'  => $question,
            'training_enroll'   => $enroll
        ];
        return view('landing.task_answer.task', $data);

    }
    public function show_soal($id, $enroll_id, $task_answer_id)
    {
        $task_answer = TaskAnswer::find($task_answer_id);
        $enroll = TrainingEnroll::find($enroll_id);
        $question = Question::find($id);
        $data = [
            'title'             => 'Training',
            'class'             => 'Pre Test',
            'question'          => $question,
            'training_enroll'   => $enroll,
            'task_answer'       => $task_answer
        ];
        return view('landing.task_answer.form_menjawab', $data);
    }
    public function class(){

    }
}
