<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CropImage;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Tentang Kita'
        ];
        return view('landing.home', $data);
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
    public function ckeditor(){
        $data = [
            'title' => 'Create Event',
            'class' => 'Event',
            'sub_class' => 'Create Event',
        ];
        return view('admin.events.create', $data);
    }
    public function crop(Request $request){
        $folderPath     = public_path('upload/');
        $image_parts    = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type     = $image_type_aux[1];
        $image_base64   = base64_decode($image_parts[1]);
        $imageName      = uniqid() . '.png';
        $imageFullPath  = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
        $saveFile       = new CropImage;
        $saveFile->name = $imageName;
        $saveFile->save();
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }

}
