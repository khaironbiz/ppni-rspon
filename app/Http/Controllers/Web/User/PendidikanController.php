<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\UserEducation;
use App\Services\UserEducation\UserEducationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendidikanController extends Controller
{

    public function __construct(UserEducationService $educationService)
    {
        $this->userEducationServices = $educationService;
    }

    public function index(){
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
        return view('user.pendidikan.index', $data);
    }
    public function store(Request $request){
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
    public function show($id){

        $user               = Auth::user();
        $code_pendidikan    = Code::where('code', 'pendidikan')->first();
        $db_pendidikan      = Code::where('parent_id',$code_pendidikan->id)->orderBy('urutan')->get();
        $user_education     = $this->userEducationServices->getById($id);
//        dd($user_education);
        $data = [
            'class'         => 'Profile',
            'sub_class'     => 'Pendidikan',
            'title'         => 'Profile Pendidikan',
            'user'          => $user,
            'db_pendidikan' => $db_pendidikan,
            'user_education'=> $user_education
        ];
        return view('user.pendidikan.show', $data);
    }
}
