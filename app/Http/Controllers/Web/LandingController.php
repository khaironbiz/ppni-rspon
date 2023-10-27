<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing.home');
    }
    public function events(){
        return view('landing.events');
    }
    public function news(){
        return view('landing.news');
    }
    public function photos(){
        return view('landing.photos');
    }
    public function faq(){
        return view('landing.faq');
    }
    public function person(){
        return view('landing.person');
    }
}
