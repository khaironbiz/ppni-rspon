<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\User;
use App\Notifications\RegistrationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('landing.profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Session::flash('success', 'Logout success');

        return redirect()->route('login');
    }
    public function forgot(){
        return view('auth.forgotPassword');
    }
    public function getPassword()
    {

    }
    public function register(){
        $gender_id = Code::where('code', 'sex')->first();
        $gender = Code::where('parent_id', $gender_id->id)->get();
//        dd($gender);
        $data = [
            'class'         => 'Auth',
            'sub_class'     => 'Register',
            'title'         => 'Register New Member',
            'gender'   => $gender
        ];
        return view('auth.register', $data);
    }
    public function do_register(Request $request){
        $user           = new User();
        $data           = $request->all();
        $data['role']   = 'user';
        $daftar         = $user->create($data);
        $user->notify(new RegistrationNotification());
        if($daftar){
            Session::flash('success', 'Registration success');
            return redirect()->route('login');
        }

    }
    public function fast_login_admin(Request $request){
        $id= $request->id;
        $admin = User::find($id);
        if($admin->role != 'admin'){
            return redirect()->route('admin.code.index');
        }else{
            return back();
        }


    }

}
