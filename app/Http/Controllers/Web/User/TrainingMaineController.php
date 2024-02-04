<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\TrainingEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingMaineController extends Controller
{
    public function index(){
        $trainings = TrainingEnroll::where('user_id', Auth::id())->get();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'My Training',
            'enrolls'       => $trainings
        ];
        return view('user.training.index', $data);

    }
    public function show($id){
        $enroll = TrainingEnroll::find($id);
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Index',
            'title'         => 'Show TRaining',
            'training'        => $enroll
        ];
        return view('user.training.show', $data);
    }
}
