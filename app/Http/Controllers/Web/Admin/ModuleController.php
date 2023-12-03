<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Curriculum;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ModuleController extends Controller
{
    public function index(){
        $modules    = Module::all();
        $curricula  = Curriculum::all();
        $metode_id  = Code::where('code', 'metode-pembelajaran')->first();
        $methode    = Code::where('parent_id', $metode_id->id)->get();
        $data = [
            'class'     => 'Module',
            'sub_class' => 'Index',
            'title'     => 'All Module',
            'modules'   => $modules,
            'curricula' => $curricula,
            'methode'   => $methode
        ];
        return view('admin.module.index', $data);
    }
    public function show($id){
        $module = Module::find($id);
        $attachment = $module->attachment()->get();
        $data = [
            'class'     => 'Module',
            'sub_class' => 'Show',
            'title'     => 'Show Model By ID',
            'module'    => $module,
            'attachment'=> $attachment
        ];
        return view('admin.module.show', $data);
    }
    public function edit($id){

    }
    public function store(Request $request){
        $module = new Module();
        $data   = $request->all();
        $data['user_id']= Auth::id();
//        dd($data);
        $create = $module->create($data);
        if($create){
            Session::flash('success', 'Data sukses dibuat');
        }else{
            Session::flash('danger', 'Data gagal dibuat');
        }
        return redirect()->back();
    }
    public function update(Request $request){

    }
    public function destroy(Request $request){
        $module = Module::find($request->id);
        Session::flash('id', $module->curriculum_id);
        if(empty($module)){
            Session::flash('danger', 'Data Not Found');
        }else{
            $delete = $module->delete();
            if($delete){
                Session::flash('success', 'Data sukses dihapus');
            }else{
                Session::flash('danger', 'Data gagal dihapus');
            }
        }
        return redirect()->route('admin.curriculum.show',['id'=>\session('id')]);
    }

}
