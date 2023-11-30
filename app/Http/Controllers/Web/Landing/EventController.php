<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        $data = [
            'title'     => 'HOME',
            'class'     => 'Events',
            'events'    => $events
        ];
        return view('landing.events.index', $data);
    }
    public function show($slug){
        $event = Event::where('slug', $slug)->first();
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS',
            'event'     => $event
        ];
        return view('landing.events.show', $data);
    }
    public function topik($id){
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS'
        ];
        return view('landing.event_topik', $data);
    }
}
