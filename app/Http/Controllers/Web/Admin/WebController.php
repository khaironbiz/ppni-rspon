<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\User;
use App\Models\Web;
use App\Services\File\FileService;
use App\Services\Web\WebService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WebController extends Controller
{
    public function __construct(WebService $webService, FileService $fileService){
        $this->fileService = $fileService;
        $this->webService = $webService;
    }
    public function index(){
        Gate::authorize('view');
//        $this->authorize('viewAny', User::class);
        $webs = Web::all();
        $data = [
            'class'         => 'Web',
            'sub_class'     => 'Web',
            'title'         => 'List Website',
            'webs'          => $webs,

        ];
        return view('admin.web.index', $data);

    }

    public function store(Request $request){
        $nama_file = "Logo Web";
        $user_id = Auth::id();
        $data_foto  = $request->file('logo');
        $save_file = $this->fileService->store($user_id, $nama_file, $data_foto);
        if($save_file != []){
            $data_web = [
                'nama_web'  => $request->nama_web,
                'logo'      => $save_file->url,
                'url'       => $request->url,
                'email'     => $request->email,
                'alamat'    => $request->alamat,
                'singkatan' => $request->singkatan,
                'phone'     => $request->phone,

            ];
            $store_web = $this->webService->store($data_web);
            if($store_web != []){
                return back()->with('success', 'Data Berhasil Disimpan');
            }
            return back()->with('danger', 'Data Gagal Disimpan');
        }
        return 'gagal upload';

    }
    public function show($id){
        Gate::authorize('view');
        $web = Web::find($id);
        $data = [
            'class'     => 'Web',
            'sub_class' => 'Web',
            'title'     => 'Detail Web',
            'web'       => $web,
        ];
        return view('admin.web.show', $data);

    }
    public function edit($id){
        Gate::authorize('view');
        $users = User::OrderBy('nama_depan', 'ASC')->get();
        $web = Web::find($id);
        $files = File::where('file_type', 'file')->get();
        $data = [
            'class'     => 'Web',
            'sub_class' => 'Web',
            'title'     => 'Update Web',
            'web'       => $web,
            'users'     => $users,
            'files'     => $files
        ];
        return view('admin.web.edit', $data);
    }
    public function update(Request $request, $id){
        Gate::authorize('view');
        $file_id    = $request->logo;
        $nama_web   = $request->nama_web;
        $singkatan  = $request->singkatan;
        $file       = File::find($file_id);
        $logo       = $file->url;
        $email      = $request->email;
        $phone      = $request->phone;
        $alamat     = $request->alamat;
        $visi       = $request->visi;
        $misi       = $request->misi;
        $pic        = $request->pic;
        $url        = $request->url;
        $web        = Web::find($id);
        $data_update = [
            'nama_web'      => $nama_web,
            'singkatan'     => $singkatan,
            'logo'          => $logo,
            'pic'           => $pic,
            'visi'          => $visi,
            'misi'          => $misi,
            'alamat'        => $alamat,
            'url'           => $url,
            'email'         => $email,
            'phone'         => $phone
        ];
        dd($request->all());
        $update = $web->update($data_update);
        if($update){
            return back()->with('success', 'Data Berhasil Disimpan');
        }else{
            return back()->with('danger', 'Data Gagal Disimpan');
        }
    }
}
