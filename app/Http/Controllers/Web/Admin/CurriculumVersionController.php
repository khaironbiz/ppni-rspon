<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\CurriculumVersion;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CurriculumVersionController extends Controller
{
    public function index(){
        $trainings = Training::all();
        $curriculum_version = CurriculumVersion::all();
        $data = [
            'class'         => 'Training',
            'sub_class'     => 'Curricula',
            'title'         => 'Curricula Version',
            'trainings'     => $trainings,
            'curriculum_version'    => $curriculum_version
        ];
        return view('admin.curriculum_version.index', $data);
    }
    public function show($slug){
        $curriculum_version = CurriculumVersion::where('slug', $slug)->first();
        $curriculum = Curriculum::where('curriculum_version_id', $curriculum_version->id)->orderBy('type', 'ASC')->get();
        $data = [
            'class'                 => 'Training',
            'sub_class'             => 'Curricula',
            'title'                 => 'Show Curricula Version',
            'curriculum_version'    => $curriculum_version,
            'curriculum'            => $curriculum
        ];
        return view('admin.curriculum_version.show', $data);
    }
    public function store(Request $request){
        $data       = $request->all();
        $data['user_id']= Auth::id();
        $curricumum_version    = new CurriculumVersion();
        $create     = $curricumum_version->create($data);
        if($create){
            Session::flash('success', 'New data created');
        }else{
            Session::flash('danger', 'New data created');
        }
        return redirect()->back();
    }
    public function update(Request $request){
        $data = $request->all();
        $curricumum_version = CurriculumVersion::find($request->id);
        if(empty($curricumum_version)){
            Session::flash('danger', 'Data Not Found');
        }else{
            $create     = $curricumum_version->update($data);
            if($create){
                Session::flash('success', 'New data created');
            }else{
                Session::flash('danger', 'New data created');
            }
        }
        return redirect()->route('admin.curriculum_version.index');

    }
    public function destroy(Request $request){
        $curricumum_version = CurriculumVersion::find($request->id);
        if(empty($curricumum_version)){
            Session::flash('danger', 'Data Not Found');
        }else{
            $create     = $curricumum_version->delete();
            $delete_curiculum = $curricumum_version->curriculum()->delete();
            if($create){
                Session::flash('success', 'Data berhasil dihapus');
            }else{
                Session::flash('danger', 'Data gagal dihapus');
            }
        }
        return redirect()->route('admin.curriculum_version.index');

    }
}
