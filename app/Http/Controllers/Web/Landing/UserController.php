<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $data = [
            'title'     => 'USER',
            'class'     => 'PROFILE',
            'user'      => $user
        ];
        return view('landing.person', $data);
    }
}
