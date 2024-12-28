<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\CropImage;
use App\Models\File;
use App\Models\ModuleAttachment;
use App\Models\TrainingEnroll;
use App\Models\User;
use App\Models\UserEducation;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{


    public function __construct(UserService $userService) {
        $this->userService = $userService;

    }
    public function index(){

        $user = Auth::user();
//        dd($user->gender_code);
        $gender_id = Code::where('code','sex')->first();
        $gender = $gender_id->child()->orderBy('urutan')->get();
        $agama_id = Code::where('code','agama')->first();
        $agama = $agama_id->child()->orderBy('urutan')->get();
        $status_pernikahan_id = Code::where('code','status-pernikahan')->first();
        $status_pernikahan = $status_pernikahan_id->child()->orderBy('urutan')->get();
        $jenis_pekerjaan_id = Code::where('code','jenis-pekerjaan')->first();
        $jenis_pekerjaan = $jenis_pekerjaan_id->child()->orderBy('urutan')->get();
        $pendidikan_id = Code::where('code','pendidikan')->first();
        $pendidikan = $pendidikan_id->child()->orderBy('urutan')->get();
        $training_enroll = TrainingEnroll::where('user_id',Auth::id())->get();
        $user_education = UserEducation::where('user_id', Auth::id())->orderBy('tahun_masuk', 'ASC')->get();
        $data = [
            'title'             => 'USER',
            'class'             => 'PROFILE',
            'user'              => $user,
            'agama'             => $agama,
            'gender'            => $gender,
            'status_pernikahan' => $status_pernikahan,
            'pekerjaan'         => $jenis_pekerjaan,
            'pendidikan'        => $pendidikan,
            'training_enroll'   => $training_enroll,
            'menu_atas'         => false,
            'user_education'    => $user_education
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
        $data = $request->all();
//        dd($data);
        $user = Auth::user();
        $update = $user->update($data);
        if($update){
            Session::flash('success', 'Berhasil update profile');
        }else{
            Session::flash('danger', 'Gagal update profile');
        }
        return redirect()->back();

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
