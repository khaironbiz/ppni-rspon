<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\ClassEvent;
use App\Models\Event;
use Illuminate\Http\Request;

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
        $data = [
            'title'         => 'HOME',
            'class'         => 'Events',
            'class_event'   => $class
        ];
        return view('landing.event_class.show', $data);
    }
}
