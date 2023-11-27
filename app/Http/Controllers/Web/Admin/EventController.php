<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'All Event',
            'title'         => 'Event All',
            'events'        => $events
        ];
        return view('admin.event.index', $data);
    }
    public function create(){
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Create',
            'title'         => 'Create New Event'
        ];
        return view('admin.event.create', $data);
    }
    public function store(StoreEventRequest $request){
        $event              = new event();
        $data_post          = $request->all();
        $create             = $event->create($data_post);
        if($create){
            // Flash an array of data
            $session = Session::flash('success', 'Data Event success created');
            return redirect()->route('admin.event.index');
        }else{
            return back();
        }
    }
    public function show($slug){
        $event = Event::where('slug', $slug)->first();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Show',
            'title'         => 'Show Event',
            'event'         => $event
        ];
        return view('admin.event.show', $data);
    }
    public function edit($slug){
        $event = Event::where('slug', $slug)->first();
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Show',
            'title'         => 'Show Event',
            'event'         => $event
        ];
        return view('admin.event.edit', $data);
    }
    public function update(Request $request){
        $data_post = $request->all();
//        dd($data_post);
        $event = Event::find($request->event_id);
        $update = $event->update($data_post);
        if($update){
            Session::flash('success', 'Data event updated');
            return redirect()->route('admin.event.index');
        }else{
            Session::flash('danger', 'Data event failed update');
            return redirect()->route('admin.event.index');
        }
    }
    public function destroy(Request $request){
        $event_slug = $request->event_slug;
        $event = Event::where('slug', $event_slug)->first();
        if(empty($event)){
            Session::flash('danger', 'Data Event Not Found');
            return redirect()->route('admin.event.index');
        }else{
            $delete = $event->delete();
            if($delete){
                Session::flash('success', 'Data event deleted');
                return redirect()->route('admin.event.index');
            }else{
                Session::flash('danger', 'Delete failed');
                return redirect()->route('admin.event.index');
            }
        }

    }
}
