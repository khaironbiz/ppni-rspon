<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Enroll;
use App\Models\Province;
use App\Models\User;

class EnrollController extends Controller
{
    public function index(){
        $provinsi = Province::all();
        $enroll = Enroll::all();
        $data = [
            'class'         => 'HIPENI',
            'sub_class'     => 'Member',
            'title'         => 'Member Hipeni',
            'enroll'        => $enroll,
            'provinsi'      => $provinsi
        ];
        return view('admin.hipeni.enroll.index', $data);
    }
}
