<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function preview(Request $request){
        $data = "sukses";
        $judul = $request->input('judul');
        $postingan = $request->input('postingan');
        // return $judul;
        return view('/admin/preview', ['data'=>$data, 'judul'=>$judul, 'postingan'=>$postingan]);
    }
}
