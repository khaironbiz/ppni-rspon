<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hipeni;

class HipeniController extends Controller
{
    public function index(){
        $hipeni = Hipeni::orderBy('nama', 'ASC')->paginate(10);
        $data = [
            'class'         => 'Event',
            'sub_class'     => 'Topic',
            'title'         => 'Event Topic All',
            'hipeni'        => $hipeni
        ];
        return view('admin.hipeni.users.index', $data);
    }
}
