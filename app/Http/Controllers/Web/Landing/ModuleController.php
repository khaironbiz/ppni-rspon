<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    public function curriculum(){
        $user = Auth::user();
        $data = [
            'title'     => 'USER',
            'class'     => 'PROFILE',
            'user'      => $user
        ];
        return view('landing.person', $data);
    }

}
