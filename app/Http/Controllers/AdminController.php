<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Admin;

class AdminController extends Controller
{
    public function index(Request $request){
        $admins = Admin::all();
        $postingan="";
        $judul="";
        foreach ($admins as $admin) {
            if($admin->id=="1"){
                $name = $admin->name;
            }
        }
            $postingan = $request->session()->get('postingan');
            $judul = $request->session()->get('judul');
            return view('admin/posting', ['admins'=>$admins, 'name'=>$name, 'judul'=>$judul, 'postingan'=>$postingan]);
    }
}
