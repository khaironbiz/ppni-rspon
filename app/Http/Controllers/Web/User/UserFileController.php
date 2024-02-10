<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\File;
use App\Models\User;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserFileController extends Controller
{
    public function index(){
        $user               = Auth::user();
        $code_pendidikan    = Code::where('code', 'pendidikan')->first();
        $db_pendidikan      = Code::where('parent_id',$code_pendidikan->id)->orderBy('urutan')->get();
        $user_file          = File::where('user_id', $user->id)->get();
//        dd($user_education);
        $data = [
            'class'         => 'Files',
            'sub_class'     => 'Index',
            'title'         => 'File User',
            'user'          => $user,
            'files'         => $user_file,
        ];
        return view('user.file.index', $data);
    }

    public function view($id){
        $user = Auth::user();
        $file = File::find($id);
        $data = [
            'class'         => 'Files',
            'sub_class'     => 'Index',
            'title'         => 'File User',
            'user'          => $user,
            'file'          => $file,
        ];
        if($file->file_type == 'Canva'){
            return view('user.file.canva', $data);
        }elseif($file->file_type == 'Youtube'){
            return view('user.file.youtube', $data);
        }else{
            return view('user.file.pdf', $data);
        }

    }
    public function show($id){
        $user               = Auth::user();
        $user_file          = File::find($id);
        $data = [
            'class'         => 'Files',
            'sub_class'     => 'Show',
            'title'         => 'Show File User',
            'user'          => $user,
            'file'          => $user_file,
        ];
        return view('user.file.show', $data);
    }

    public function store_external(Request $request){
        $post = [
            'user_id'       => Auth::id(),
            'title'         => $request->title,
            'file_type'     => $request->file_type,
            'file_name'     => $request->file_id,
        ];
        $file   = new File();
        $create = $file->create($post);
        if($create){
            return redirect()->back()->with('success', 'Berhasil membuat data baru');
        }else{
            return redirect()->back()->with('danger', 'Gagal membuat data baru');
        }
    }
    public function store(Request $request)
    {
        $user_id    = Auth::id();
        $user       = User::find($user_id);
        $file       = $request->file('file');
        $result     = Storage::disk('s3')->putFileAs('files', $file, $file->hashName(), 'public');
        $url        = Storage::disk('s3')->url($result);
        $data_file  = [
            'user_id'   => $user_id,
            'title'     => $request->title,
            'file_name' => $file->hashName(),
            'extention' => $file->getClientOriginalExtension(),
            'file_type' => $file->getType(),
            'size'      => $file->getSize(),
            'user_id'   => $user_id,
            'url'       => url($url)
        ];
//        dd($data_file);

        $file = new File();
        $create = $file->create($data_file);

        if ($create) {
            return redirect()->back()->with('success', 'Berhasil membuat data baru');
        } else {
            return redirect()->back()->with('danger', 'Gagal membuat data baru');
        }
    }
    public function destroy(Request $request){
        $delete = File::find($request->file_id)->delete();
        if($delete){
            return redirect()->route('user.file.index')->with('success', 'Data berhasil dihapus');
        }
    }
}
