<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CodeController extends Controller
{
    public function index(){
        $codes = Code::all();
        $data = [
            'class'         => 'Code',
            'sub_class'     => 'Index',
            'title'         => 'All data code',
            'codes'         => $codes
        ];
        return view('admin.code.index', $data);
    }
    public function parent(){
        $codes = Code::where('parent_id', null)->get();
        $data = [
            'class'         => 'Code',
            'sub_class'     => 'Parent',
            'title'         => 'Code Parent',
            'codes'         => $codes
        ];
        return view('admin.code.index', $data);
    }
    public function child($id){

    }
    public function show($id){
        $code = Code::find($id);
        $child_codes = Code::where('parent_id', $id)->get();
//        dd($child_codes);
        $data = [
            'class'         => 'Code',
            'sub_class'     => 'Code By ID',
            'title'         => 'Code ByID',
            'code'          => $code,
            'child_codes'   => $child_codes
        ];
        return view('admin.code.show', $data);
    }
    public function store(Request $request){
        $code = new Code();
        $data   = $request->all();
        $create = $code->create($data);
        if($create){
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->back();
    }
    public function child_store(Request $request){
        $code       = new Code();
        $parent_id  = $request->parent_id;
        $data       = $request->all();
        $data['code_id'] = $parent_id;
        $parent     = Code::find($request->parent_id);
        $create     = $code->create($data);
        if($create){
            $data_update = [
                'child_number'  => $parent->child()->count()
            ];
            $parent->update($data_update);
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->back();
    }
    public function edit($id){

    }
    public function update(Request $request){
        $code = Code::find($request->id);
        $data = $request->all();
        $update = $code->update($data);
        if($update){
            Session::flash('success', 'Data sukses diubah');
        }else{
            Session::flash('danger', 'Data gagal diubah');
        }
        return redirect()->back();
    }
    public function destroy(Request $request){
        $code = Code::find($request->id);
        $child_delete = $code->child()->delete();
        $code_delete = $code->delete();
        if($code_delete){
            Session::flash('success', 'Data sukses dihapus');
        }else{
            Session::flash('danger', 'Data gagal dihapus');
        }
        return redirect()->route('admin.code.parent');
    }
}
