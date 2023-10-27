<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
        return view('landing.events', $data);
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
    public function contact(){
        $data = [
            'title'     => 'HOME',
            'class'     => 'Contact'
        ];
        return view('landing.contacts', $data);
    }
}
