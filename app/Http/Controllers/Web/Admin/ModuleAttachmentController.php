<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModuleAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ModuleAttachmentController extends Controller
{
    //
    public function index(){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function store(Request $request){
        $attachment = new ModuleAttachment();
        $data       = $request->all();
        $create     = $attachment->create($data);
        if($create){
            Session::flash('success', 'Berhasil membuat data baru');
        }else{
            Session::flash('danger', 'Gagal membuat data baru');
        }
        return redirect()->back();
    }
    public function update(Request $request){

    }
    public function destroy(Request $request){

    }
}
