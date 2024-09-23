<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Code;
use App\Models\UserEducation;
use App\Services\File\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
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
        $code_agama             = Code::where('code', 'agama')->first();
        $agama                  = Code::where('parent_id',$code_agama->id)->orderBy('title')->get();
        $code_gender            = Code::where('code','sex')->first();
        $gender                 = Code::where('parent_id',$code_gender->id)->orderBy('title')->get();
        $data = [
            'class'             => 'User',
            'sub_class'         => 'Profile',
            'title'             => 'Profile User',
            'user'              => $user,
            'jenis_pekerjaan'   => $jenis_pekerjaan,
            'stutus_menikah'    => $status_pernikahan,
            'agama'             => $agama,
            'gender'            => $gender
        ];
        return view('user.profile.edit', $data);
    }
    public function update(UpdateProfileRequest $request){
        $input_data     = $request->validated();
        $data_foto      = $request->file('foto');
        $save_file      = $this->fileService->store(Auth::id(), 'Pass Foto', $data_foto);
        $user           = Auth::user();
        $update         = $user->update($input_data);
        if($update){
            return back()->with('success', 'Data Berhasil Disimpan');
        }

    }
    public function pendidikan(){
        $user               = Auth::user();
        $code_pendidikan    = Code::where('code', 'pendidikan')->first();
        $db_pendidikan      = Code::where('parent_id',$code_pendidikan->id)->orderBy('urutan')->get();
        $user_education     = UserEducation::where('user_id', $user->id)->orderBy('tahun_keluar')->get();
//        dd($user_education);
        $data = [
            'class'         => 'Profile',
            'sub_class'     => 'Pendidikan',
            'title'         => 'Profile Pendidikan',
            'user'          => $user,
            'db_pendidikan' => $db_pendidikan,
            'user_education'=> $user_education
        ];
        return view('user.profile.pendidikan', $data);
    }
    public function store_pendidikan(Request $request){
//        dd($request->all());
        $input = [
            'jenjang_pendidikan_id' => $request->pendidikan_id,
            'user_id'               => Auth::id(),
            'nama_institusi'        => $request->nama_instansi,
            'tahun_masuk'           => $request->tahun_masuk,
            'tahun_keluar'          => $request->tahun_keluar,
            'nomor_ijazah'          => $request->nomor_ijazah,
            'nama_penandatangan_ijazah' => $request->nama_penandatangan_ijazah
        ];

        $user_education = new UserEducation();
        $create = $user_education->create($input);
        if($create){
            return back()->with('success', 'Data Berhasil disimpan');
        }
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
