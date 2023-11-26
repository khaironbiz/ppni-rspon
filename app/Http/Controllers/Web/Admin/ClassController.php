<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Class',
            'title'         => 'Class Event All'
        ];
        return view('admin.class.index', $data);
    }
    public function create(){
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Create Class',
            'title'         => 'Create New Class'
        ];
        return view('admin.class.create', $data);
    }
}
