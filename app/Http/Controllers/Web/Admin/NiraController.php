<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nira;
use App\Models\Province;
use App\Models\User;
use App\Services\User\UserService;

class NiraController extends Controller
{

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index(){
        $user   = new User();
        $nira   = Nira::where('migrate', false)->paginate(100);
        foreach ($nira as $data){
            $password   = bcrypt(uniqid());
            $data_user  = [
                'nama_depan'        => $data->nama,
                'nama_belakang'     => "Null",
                'nik'               => $data->ktp,
                'email'             => $data->email,
                'nomor_telepon'     => $data->hp,
                'tempat_lahir'      => $data->tl,
                'tanggal_lahir'     => $data->ttl,
                'password'          => $password,
                'role'              => "01hgypq1q4tsxp49b5dtn2645f",
                'foto'              => $data->foto
            ];
            $find       = User::where('nik', $data->ktp);
            if($find->count() > 0){
                $update = Nira::find($data->id)->update(['migrate'=>true]);
            }else{
                $create_user    = $user->create($data_user);
                $update         = Nira::find($data->id)->update(['migrate'=>true]);
            }
        }
        $provinsi = Province::all();
        $data = [
            'class'         => 'HIPENI',
            'sub_class'     => 'Member',
            'title'         => 'Member Hipeni',
            'paginator'     => $nira,
            'provinsi'      => $provinsi
        ];
        return view('admin.nira.users.index', $data);
    }
}
