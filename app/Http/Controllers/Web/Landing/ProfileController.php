<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\ModuleAttachment;
use App\Models\User;
use App\Service\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    private UserService $userService;

    public function __construct() {
        $this->userService = new UserService();

    }
    public function index(){

        $user = Auth::user();
//        dd($user->gender_code);
        $data = [
            'title'     => 'USER',
            'class'     => 'PROFILE',
            'user'      => $user
        ];
        return view('landing.profile.person', $data);
    }
    public function edit(){
        $user = Auth::user();
        $data = [
            'title'     => 'USER',
            'class'     => 'PROFILE',
            'user'      => $user
        ];
        return view('landing.person', $data);
    }
    public function update(Request $request){

    }
    public function update_foto(Request $request){
        $user_id    = Auth::id();
        $user       = User::find($user_id);
        $file       = $request->file('foto');
        $result     = Storage::disk('s3')->putFileAs('latihan', $file, $file->hashName(),'public');
        $url        = Storage::disk('s3')->url($result);
        $data_file  = [
            'file_name' => $file->hashName(),
            'extention' => $file->getClientOriginalExtension(),
            'file_type' => $file->getType(),
            'size'      => $file->getSize(),
            'user_id'   => $user_id,
            'url'       => url($url)
        ];

        $update_foto = $user->update(['foto'=>$data_file['url']]);

        if($update_foto){
            Session::flash('success', 'Berhasil membuat data baru');
        }else{
            Session::flash('danger', 'Gagal membuat data baru');
        }
        return redirect()->back();
    }
}
