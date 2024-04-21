<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hipeni;
use App\Models\User;
use Illuminate\Http\Request;

class HipeniController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if(!empty($keyword)){
            $hipeni = Hipeni::where('nama', 'like', '%'.$keyword."%")
                ->orWhere('email', 'like', '%'.$keyword."%")
                ->orWhere('noktp', 'like', '%'.$keyword."%")
                ->orderBy('nama', 'ASC')->paginate(10);
        }else{
            $hipeni = Hipeni::orderBy('nama', 'ASC')->paginate(10);
        }
        $migrate = Hipeni::where('migrate', false)->orderBy('nama', 'ASC')->limit(10)->get();
        $user = new User();
        foreach ($migrate as $data){
            if($data->tl == "0000-00-00"){
                $tl = date('Y-m-d');
            }else{
                $tl = date('Y-m-d', strtotime($data->tl));
            }
            if($data->foto != null){
                $foto = "https://hipeni.or.id/en/foto_user_hipeni/".$data->foto;
            }else{
                $foto = "";
            }
            $data_user = [
                'nama_depan'        => $data->nama,
                'nama_belakang'     => "Null",
                'nik'               => $data->noktp,
                'email'             => $data->email,
                'nomor_telepon'     => $data->hp,
                'tempat_lahir'      => $data->ttl,
                'tanggal_lahir'     => $tl,
                'password'          => bcrypt("password"),
                'role'              => "01hgypq1q4tsxp49b5dtn2645f",
                'foto'              => $foto
            ];
            $find = User::where('nik', $data->noktp)->orWhere('email', $data->email)
                ->orWhere('email', $data->email)->orWhere('nomor_telepon', $data->hp);
            if($find->count()>0){
                $update = Hipeni::find($data->id)->update(['migrate'=>true]);
            }else{
                $create_user = $user->create($data_user);
                $update = Hipeni::find($data->id)->update(['migrate'=>true]);
            }
        }


        $data = [
            'class'         => 'HIPENI',
            'sub_class'     => 'Member',
            'title'         => 'Member Hipeni',
            'paginator'     => $hipeni,
            'users'         => User::paginate(10)
        ];
        return view('admin.hipeni.users.index', $data);
    }
}
