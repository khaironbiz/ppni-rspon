<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Web;
use App\Services\File\FileService;
use App\Services\Web\WebService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function __construct(WebService $webService, FileService $fileService){
        $this->fileService = $fileService;
        $this->webService = $webService;
    }
    public function index(){
        $this->authorize('viewAny', User::class);
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
//        $this->authorize('view', User::class, User::class);
        $web = $this->webService->show($id);

        $encrypt = encrypt($web->user->nik);
        $decrypt = decrypt($encrypt);

        dd($encrypt, $decrypt);

    }
}
