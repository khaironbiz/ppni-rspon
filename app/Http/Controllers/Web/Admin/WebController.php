<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
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

//        dd($request->all());
        $nama_file = "Logo Web";

        $user_id = Auth::id();
        $save_file = $this->fileService->store($user_id, $nama_file, $request);
        if($save_file != []){
            dd($save_file);
        }
        $data_web = [
            'nama_web'  => $request->nama_web,
            'logo'      => $save_file->url,
            'url'       => $request->url,
            'email'     => $request->email,
            'alamat'    => $request->alamat
        ];
        $store_web = $this->webService->create($data_web);

        return 'gagal upload';

    }
}
