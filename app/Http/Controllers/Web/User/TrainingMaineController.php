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
            'class'         => 'Code',
            'sub_class'     => 'Index',
            'title'         => 'All data code',
            'enrolls'       => $trainings
        ];
        return view('user.training.index', $data);

    }
}
