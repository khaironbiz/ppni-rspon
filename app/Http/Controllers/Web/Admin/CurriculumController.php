<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Curriculum;
use App\Models\CurriculumVersion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CurriculumController extends Controller
{
    public function index() {
        $curriculums = Curriculum::all();
//        dd($curriculums);
        $data = [
            'class'         => 'Curricula',
            'sub_class'     => 'Show',
            'title'         => 'Show Curricula',
            'curriculums'   => $curriculums
        ];
        return view('admin.curriculum.show', $data);
    }
    public function store(Request $request){
        $data = $request->all();
        $data['user_id']= Auth::id();
//        dd($data);
        $curricula = new Curriculum();
        $create = $curricula->create($data);
        if($create){
            Session::flash('success', 'Berhasil membuat data baru');
        }else{
            Session::flash('danger', 'Gagal membuat data baru');
        }
        return redirect()->back();
    }
    public function show($id){
        $curriculum = Curriculum::find($id);
        $metode_id  = Code::where('code', 'metode-pembelajaran')->first();
        $methode    = Code::where('parent_id', $metode_id->id)->get();
//        dd($curriculum->module()->get());
        $data = [
            'class'         => 'Curricula',
            'sub_class'     => 'Show',
            'title'         => 'Show Curricula',
            'curriculum'    => $curriculum,
            'modules'       => $curriculum->module()->get(),
            'methode'       => $methode
        ];
        return view('admin.curriculum.show', $data);
    }
    public function update(Request $request){
        $curriculum = Curriculum::find($request->id);
        $data = $request->all();
        $update = $curriculum->update($data);
        if($update){
            Session::flash('success', 'Data berhasil dirubah');
        }else{
            Session::flash('danger', 'Data gagal dirubah');
        }
        return redirect()->back();
    }
    public function destroy(Request $request){
        $curriculum = Curriculum::find($request->id);
        $update = $curriculum->delete();
        if($update){
            Session::flash('success', 'Data berhasil dihapus');
        }else{
            Session::flash('danger', 'Data gagal dihapus');
        }
        return redirect()->route('admin.curriculum_version.show', ['slug'=>$curriculum->curriculum_version->slug]);
    }
}
