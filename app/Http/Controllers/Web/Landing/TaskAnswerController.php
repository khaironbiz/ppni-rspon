<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Admin\TaskController;
use App\Models\Code;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\Task;
use App\Models\TaskAnswer;
use App\Models\TaskAnswerDetail;
use App\Models\Training;
use App\Models\TrainingEnroll;
use App\Models\TrainingQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            'enroll'        => $enroll,
            'menu_atas'     => false
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
        $training_question = TrainingQuestion::where('training_id', $enroll->training_id)->first();
        $question = Question::where('training_question_id', $training_question->id)->get();
        $data_task_answer = $task_answer->first();
        if($task_answer->count() < 1){
            $data = [
                'task_id'           => $task->id,
                'training_id'       => $enroll->training_id,
                'class_event_id'    => $task->class_event_id,
                'student_id'        => Auth::id(),
                'jenis_tugas'       => $pretest->id,
                'date_start'        => date('Y-m-d')
            ];
            $create_answer  = new TaskAnswer();
            $create = $create_answer->create($data);

            $data_task_answer = $task_answer->first();
//            dd($task_answer->first());
            foreach ($question as $q){
                $task_answer_detail = new TaskAnswerDetail();
                $data = [
                    'user_id'           => Auth::id(),
                    'task_answer_id'    => $data_task_answer->id,
                    'question_id'       => $q->id,
                    'description'       => $q->description,
                    'youtube_id_video'  => $q->youtube_id_video,
                    'curriculum_id'     => $q->curriculum_id,
                ];
                $create_answer = $task_answer_detail->create($data);
            }
        }
//        dd($data_task_answer);
        $list_task_answer_detail = TaskAnswerDetail::where('task_answer_id',$data_task_answer->id)->get();
        if($data_task_answer->nilai == null){
//            dd($list_task_answer_detail);
            $data = [
                'title'             => 'Training',
                'class'             => 'Pre Test',
                'task'              => $task,
                'task_answer'       => $task_answer->first(),
                'question'          => $list_task_answer_detail,
                'training_enroll'   => $enroll,
                'menu_atas'         => true
            ];
//        dd($data);
            return view('landing.task_answer.task', $data);
        }else{
            $data = [
                'title'             => 'Training',
                'class'             => 'Pre Test',
                'task'              => $task,
                'task_answer'       => $task_answer->first(),
                'question'          => $list_task_answer_detail,
                'training_enroll'   => $enroll,
                'menu_atas'         => true
            ];
//        dd($data);
            return view('landing.task_answer.task_hasil', $data);

        }


    }
    public function posttest($id){
    $enroll     = TrainingEnroll::find($id);
    $pretest    = Code::where('code', 'post-test')->first();
//    dd($pretest);
    $task       = Task::where([
        'training_id'   => $enroll->training_id,
        'jenis_tugas'   => $pretest->id
    ])->first();
//    dd($task);
    $task_answer = TaskAnswer::where([
        'task_id'       => $task->id,
        'jenis_tugas'   => $pretest->id,
        'student_id'    => Auth::id()
    ]);
//    dd($task_answer->first());
    $training_question  = TrainingQuestion::where('training_id', $enroll->training_id)->first();
    $question           = Question::where('training_question_id', $training_question->id)->get();
    $data_task_answer   = $task_answer->first();
//    dd($question);
    if($task_answer->count() < 1){
        $data = [
            'task_id'           => $task->id,
            'training_id'       => $enroll->training_id,
            'class_event_id'    => $task->class_event_id,
            'student_id'        => Auth::id(),
            'jenis_tugas'       => $pretest->id,
            'date_start'        => date('Y-m-d H:i:s'),
        ];
        $create_answer  = new TaskAnswer();
        $create = $create_answer->create($data);

        $data_task_answer   = $task_answer->first();

//            dd($task_answer->first());
        foreach ($question as $q){
            $task_answer_detail = new TaskAnswerDetail();
            $data = [
                'user_id'           => Auth::id(),
                'task_answer_id'    => $data_task_answer->id,
                'question_id'       => $q->id,
                'description'       => $q->description,
                'youtube_id_video'  => $q->youtube_id_video,
                'curriculum_id'     => $q->curriculum_id,
            ];
            $create_answer = $task_answer_detail->create($data);
        }
    }
        $list_task_answer_detail = TaskAnswerDetail::where('task_answer_id',$data_task_answer->id)->get();
//        dd($data_task_answer);
    if($data_task_answer->status == "open"){

//            dd($list_task_answer_detail);
        $data = [
            'title'             => 'Training',
            'class'             => 'Post Test',
            'task'              => $task,
            'task_answer'       => $task_answer->first(),
            'question'          => $list_task_answer_detail,
            'training_enroll'   => $enroll,
            'menu_atas'         => true
        ];
//        dd($data);
        return view('landing.task_answer.task', $data);
    }else{
        $data = [
            'title'             => 'Training',
            'class'             => 'Post Test',
            'task'              => $task,
            'task_answer'       => $task_answer->first(),
            'question'          => $list_task_answer_detail,
            'training_enroll'   => $enroll,
            'menu_atas'         => true
        ];
//        dd($data);
        return view('landing.task_answer.task_hasil', $data);
    }


}
    public function list_soal($task_answer_id, $enroll_id)
    {
        $task_answer = TaskAnswer::find($task_answer_id);
        $enroll = TrainingEnroll::find($enroll_id);
        $posttest = Code::where('code', 'post-test')->first();
        $task = Task::where([
            'training_id'   => $enroll->training_id,
            'jenis_tugas'   => $posttest->id
        ])->first();
        $task_answer = TaskAnswer::where([
            'task_id'       => $task->id,
            'jenis_tugas'   => $posttest->id
        ]);
        $task_answer_detail = TaskAnswerDetail::where('task_answer_id', $task_answer_id)->get();
        dd($task_answer_detail);
        $training_question = TrainingQuestion::where('training_id', $enroll->training_id)->first();
        $question = Question::where('training_question_id', $training_question->id)->get();
        $data = [
            'title'             => 'Training',
            'class'             => 'Post Test',
            'task'              => $task,
            'task_answer'       => $task_answer->first(),
            'question'          => $task_answer_detail,
            'training_enroll'   => $enroll,
            'menu_atas'         => true
        ];
        return view('landing.task_answer.task', $data);
    }
    public function show_soal($id, $enroll_id)
    {
        $task_answer_detail = TaskAnswerDetail::find($id);
        $enroll = TrainingEnroll::find($enroll_id);
        $task_answer_detail = TaskAnswerDetail::find($id);
        $answer = QuestionAnswer::where('question_id', $task_answer_detail->question_id)->get();
//        dd($answer);
//        dd($task_answer_detail);
        $data = [
            'title'             => 'Training',
            'class'             => 'Pre Test',
            'task_answer_detail' => $task_answer_detail,
            'training_enroll'   => $enroll,
            'answer'            => $answer,
            'menu_atas'         => true
        ];
        return view('landing.task_answer.form_menjawab', $data);
    }
    public function task_finish(Request $request){
        $enroll_id      = $request->enroll_id;
        $task_answer_id = $request->task_answer_id;
        $enroll = TrainingEnroll::find($enroll_id);
        $task_answer = TaskAnswer::find($task_answer_id);
        $count_true = TaskAnswerDetail::where([
                'task_answer_id'    => $task_answer_id,
                'correct'           => true
        ])->count();
        $data = [
            'enroll_id'     => $enroll_id,
            'task_answer_id'=> $task_answer_id,
            'enroll'        => $enroll,
            'task_answer'   => $task_answer,
            'true'          => $count_true
        ];
//        dd($data);
        if($task_answer->status == "open"){
            $update = $task_answer->update([
                'status'        => 'close',
                'nilai'         => $count_true,
                'date_finish'   => date('Y-m-d H:i:s')
            ]);
            if($update){
                Session::flash('success', 'Data sukses dibuat');
            }else{
                Session::flash('danger', 'Data gagal dibuat');
            }
            return redirect()->back();
        }

    }
}
