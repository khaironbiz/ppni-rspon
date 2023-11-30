<?php

namespace App\Http\Controllers\Web\admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index(){
        $modules = Module::all();
        $data = [
            'class'     => 'Training',
            'sub_class' => 'Index',
            'title'     => 'Training All',
            'modules'   => $modules
        ];
        return view('admin.module.index', $data);
    }
}
