<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\User;
use App\Services\UserRole\UserRoleService;
use Illuminate\Support\Facades\Request;

class UserRoleController extends Controller
{
    public function __construct(UserRoleService $userRoleService){
        $this->userRoleService = $userRoleService;
    }
    public function index(){
        $role_code  = Code::where('code', 'role-user')->first();
        $roles      = Code::where('parent_id', $role_code->id)->get();
        $users      = User::all();
        $user_role  = $this->userRoleService->all();
        $data = [
            'class'         => 'Module',
            'sub_class'     => 'Index',
            'title'         => 'All Module',
            'roles'         => $roles,
            'users'         => $users,
            'user_roles'    => $user_role,
        ];
        return view('admin.user_role.index', $data);
    }
    public function store(Request $request){
        dd($request->all());
    }

}
