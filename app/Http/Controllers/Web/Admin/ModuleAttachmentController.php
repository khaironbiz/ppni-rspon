<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\ModuleAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ModuleAttachmentController extends Controller
{
    //
    public function index(){

    }
    public function show($id){
        $attachment = ModuleAttachment::find($id);
        if($attachment->file_type == 'canva'){
            $view = 'canva';
        }elseif($attachment->file_type == 'youtube'){
            $view = 'youtube';
        }else{
            $view = 'show';
        }
        $data = [
            'class'     => 'Module',
            'sub_class' => 'Show',
            'title'     => 'Show Model By ID',
            'attachment'=> $attachment
        ];
        return view('admin.module_attachment.'.$view, $data);
    }

    public function edit($id){

    }
    public function store(Request $request){
//        dd($request->all());
        $file           = File::find($request->file_id);
        $post           = [
            'module_id'     => $request->module_id,
            'file_id'       => $file->id,
            'file_type'     => $file->file_type,
            'user_id'       => Auth::id()
        ];
        $attachment     = new ModuleAttachment();
        $create         = $attachment->create($post);
        if($create){
            Session::flash('success', 'Berhasil membuat data baru');
        }else{
            Session::flash('danger', 'Gagal membuat data baru');
        }
        return redirect()->back();
    }
    public function uploadFile(Request $request)
    {
        $user_id = Auth::id();
        $file = $request->file('file_name');
        $result     = Storage::disk('s3')->putFileAs('latihan', $file, $file->hashName(),'public');
        $url        = Storage::disk('s3')->url($result);
        $data_file  = [
            'file_name' => $file->hashName(),
            'extention' => $file->getClientOriginalExtension(),
            'file_type' => $file->getType(),
            'size'      => $file->getSize(),
            'user_id'   => $user_id,
            'url'       => url($url)
        ];
        $attachment = new ModuleAttachment();
        $data       = [
            'module_id'     => $request->module_id,
            'file_type'     => $request->file_type,
            'file_name'     => $data_file['file_name']
        ];
        $create     = $attachment->create($data);

        if($create){
            $this->upload($data_file);
            Session::flash('success', 'Berhasil membuat data baru');
        }else{
            Session::flash('danger', 'Gagal membuat data baru');
        }
        return redirect()->back();
    }
    public function download($id){
        $attachment = ModuleAttachment::find($id);
        $data_file = $attachment->file_name;
        $folder = "latihan/";
        $filename = $folder.$data_file;
        $disk = 's3'; // Use the S3 disk
        // Check if the file exists on S3
        if (Storage::disk($disk)->exists($filename)) {
            // Get the file contents from S3
            $file = Storage::disk($disk)->get($filename);

            // Get the file MIME type
            $mimeType = Storage::disk($disk)->mimeType($filename);

            // Create a response with the file contents and headers
            return response($file, 200)
                ->header('Content-Type', $mimeType)
                ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
        } else {
            // If the file does not exist on S3, return a 404 response
            abort(404);
        }
    }
    public function update(Request $request){

    }
    public function destroy(Request $request){
        $id = $request->id;
        $attachment = ModuleAttachment::find($id);
//        dd($id);
        if($attachment->file_type == 'file'){
            $folder = "latihan/";
            $filename = $folder.$attachment->file_name;
            $disk = 's3'; // Use the S3 disk
            // Check if the file exists on S3
            if (Storage::disk($disk)->exists($filename)) {
                Storage::disk($disk)->delete($filename);
            } else {

            }
        }


        $delete = $attachment->delete();
        if($delete){
            Session::flash('success', 'Berhasil menghapus data');
        }else{
            Session::flash('danger', 'Gagal menghapus data');
        }
        return redirect()->back();

    }

    private function upload($data_file) : bool{
        $file = new File();
        $create = $file->create($data_file);
        if($create){
            return true;
        }else{
            return false;
        }

    }
}
