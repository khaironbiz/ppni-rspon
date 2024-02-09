<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $data = [
            'class'         => 'User',
            'sub_class'     => 'Profile',
            'title'         => 'Profile User',
            'user'          => $user
        ];
        return view('user.profile.index', $data);
    }
    public function edit(){
        $user = Auth::user();
        $code_pernikahan        = Code::where('code', 'status-pernikahan')->first();
        $status_pernikahan      = Code::where('parent_id',$code_pernikahan->id)->get();
        $code_jenis_pekerjaan   = Code::where('code','jenis-pekerjaan')->first();
        $jenis_pekerjaan        = Code::where('parent_id',$code_jenis_pekerjaan->id)->get();
        $data = [
            'class'         => 'User',
            'sub_class'     => 'Profile',
            'title'         => 'Profile User',
            'user'          => $user,
            'jenis_pekerjaan'   => $jenis_pekerjaan,
            'stutus_menikah'    => $status_pernikahan
        ];
        return view('user.profile.edit', $data);
    }
    public function update(UpdateProfileRequest $request){

    }
    public function pendidikan(){

    }
    public function pekerjaan(){

    }
    public function organisasi(){

    }
    public function pelatihan(){

    }
    public function alamat(){

    }
}
