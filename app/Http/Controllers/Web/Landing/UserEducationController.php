<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEducationController extends Controller
{
    public function store(Request $request){
        $user_education = new UserEducation();
        $data_input = [
            'user_id'               => Auth::id(),
            'jenjang_pendidikan'    => $request->level,
            'nama_institusi'        => $request->nama_institusi,
            'tahun_masuk'           => $request->tahun_masuk,
            'tahun_keluar'          => $request->tahun_keluar,
        ];
        $create = $user_education->create($data_input);

    }
}
