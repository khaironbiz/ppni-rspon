<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Code;
use App\Models\CurriculumVersion;
use Illuminate\Http\Request;

class DependantDropdownController extends Controller
{
    public function pendidikan()
    {
        $code_Pendidikan    = Code::where('code', 'pendidikan')->first();
        $pendidikan         = Code::where('parent_id',$code_Pendidikan->id)->orderBy('title')->get();
        return response()->json($pendidikan);
    }

    public function sub_pendidikan($jenis_pendidikan)
    {
        $code_jenis_pendidikan      = Code::find($jenis_pendidikan);
        $pendidikan                 = Code::where('parent_id',$code_jenis_pendidikan->id)->orderBy('urutan')->get();
        return response()->json([
            'pendidikan' => $pendidikan,
            'csrf_token' => csrf_token() // Include CSRF token
        ]);

    }
    public function kurikulum_versi($training_id)
    {
        $kurikulim_versi = CurriculumVersion::where('training_id', $training_id)->get();
        return response()->json($kurikulim_versi);

    }


    /// kota
    public function kota($id_prov){
        $kota = City::where('id_prov', $id_prov)->get();
        return response()->json(['cities'=>$kota]);
    }
}
