<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Events'
        ];
        return view('landing.events', $data);
    }
    public function show($id){
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS'
        ];
        return view('landing.event_detail', $data);
    }
    public function topik($id){
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS'
        ];
        return view('landing.event_topik', $data);
    }
}
