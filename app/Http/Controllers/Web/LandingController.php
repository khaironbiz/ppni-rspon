<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CropImage;
use App\Models\File;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Tentang Kita'
        ];
        return view('landing.home-canva', $data);
    }
    public function events(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Events'
        ];
        return view('landing.events.index', $data);
    }
    public function event_show($id){
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS'
        ];
        return view('landing.events.event_detail', $data);
    }
    public function event_topik($id){
        $data = [
            'title'     => 'Learning',
            'class'     => 'NIHSS'
        ];
        return view('landing.topics.event_topik', $data);
    }
    public function news(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'News'
        ];
        return view('landing.news', $data);
    }
    public function photos(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Photos'
        ];
        return view('landing.photos', $data);
    }
    public function faq(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'FAQ'
        ];
        return view('landing.faq', $data);
    }
    public function person(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Person'
        ];
        return view('landing.person', $data);
    }
    public function price(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Price'
        ];
        return view('landing.pricing', $data);
    }
    public function booking(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Book'
        ];
        return view('landing.book', $data);
    }
    public function contact(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Contact'
        ];
        return view('landing.contacts', $data);
    }
    public function upload(){
        return view('upload.upload');
    }
    public function pengembangan(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Pengembangan'
        ];
        return view('landing.notfound', $data);
    }
    public function ckeditor(){
        $data = [
            'title' => 'Create Event',
            'class' => 'Event',
            'sub_class' => 'Create Event',
        ];
        return view('admin.events.create', $data);
    }
    public function knn(){
        $data = [
            'title' => 'Klasifikasi Stroke',
            'class' => 'knn',
            'sub_class' => 'stroke',
        ];
        return view('knn.stroke', $data);
    }
    public function crop(Request $request){
        $validatedData = $request->validate([
            'image_base64' => 'required',
        ]);
        $imageBase64 = $request->image_base64;
        if($request->title == null){
            $title = time().".png";
        }else{
            $title = $request->title;
        }

        $user_id    = Auth::id();
        $user       = User::find($user_id);
        $file       = $request->image_base64;
        $file_name  = $title;
        $result     = Storage::disk('s3')->putFileAs('files', $file, $title, 'public');
        $url        = Storage::disk('s3')->url($result);
        $size       = Storage::disk('s3')->size($result);
        $data_file  = [
            'user_id'   => $user_id,
            'title'     => $title,
            'file_name' => $file_name,
            'extention' => ".png",
            'file_type' => "file",
            'size'      => $size,
            'url'       => url($url)
        ];

        $file = new File();
        $create = $file->create($data_file);
        if($create){
            CropImage::create(['name'=>$title]);
            return back()->with('success', 'Image uploaded successfully.');
        }

    }
    public function comingsoon(){
        return view('layout.comingsoon');
    }
    public function blog(){
        return view('landing.compact.blog.index');
    }

}
