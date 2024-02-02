<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $data = [
            'class'         => 'Code',
            'sub_class'     => 'Index',
            'title'         => 'All data code',
            'users'         => $users
        ];
        return view('admin.user.index', $data);
    }
    public function store(){

    }

}
