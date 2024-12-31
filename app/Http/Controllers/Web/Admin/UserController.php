<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrainingEnroll;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $data = [
            'class'         => 'User',
            'sub_class'     => 'Index',
            'title'         => 'All User',
            'users'         => $users
        ];
        return view('admin.user.index', $data);
    }
    public function store(){

    }
    public function show($id){
        $enrolls    = TrainingEnroll::where('user_id', $id)->get();
        $user       = User::find($id);
        $data = [
            'class'         => 'User',
            'sub_class'     => 'Show',
            'title'         => 'Show User',
            'user'          => $user,
            'enrolls'       => $enrolls
        ];
        return view('admin.user.show', $data);
    }

}
