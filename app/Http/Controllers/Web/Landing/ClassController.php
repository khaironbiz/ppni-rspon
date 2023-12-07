<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Event;
use App\Models\TrainingEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function index(){
        $class = ClassEvent::all();
        $data = [
            'title'         => 'HOME',
            'class'         => 'Events',
            'class_events'  => $class
        ];
        return view('landing.event_class.index', $data);
    }
    public function show($slug){
        $class = ClassEvent::where('slug', $slug)->first();
        $training_enroll = TrainingEnroll::where([
            'training_id'       => $class->training_id,
            'class_event_id'    => $class->id,
            'user_id'           => Auth::id(),
        ])->first();
//        dd($training_enroll);
        $data = [
            'title'             => 'HOME',
            'class'             => 'Events',
            'class_event'       => $class,
            'training_enroll'   => $training_enroll
        ];
        return view('landing.event_class.show', $data);
    }
}
