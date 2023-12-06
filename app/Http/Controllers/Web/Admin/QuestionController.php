<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index(){

    }
    public function show($id){
        $question = Question::find($id);
        dd($question);
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
//        return redirect()->back();
    }
    public function update(Request $request){

    }
    public function destroy(Request $request){

    }
}
