<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;

class FileController extends Controller
{
    public function index(){
        $files = File::where()->get();

    }
    public function show($id){
        $file = File::find($id);
        return response()->json($file, 200);
    }
}
