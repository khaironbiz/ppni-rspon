<?php

namespace App\Http\Controllers;

use App\Models\Code;
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
}
