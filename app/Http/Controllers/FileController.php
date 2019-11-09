<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use App\Admin;
use Alert;
// use Session;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Admins = Admin::all();
        foreach($Admins as $admin){
            if($admin->id==1){
                $nama = $admin->name;
                return view('admin.upload', ['name'=>$nama]);
            }
        }

    }


    public function modal(){
        return view('admin.upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new \App\File();
        $data->name = $request->input('name');
        // $file = $request->input('file');
        // $extension = $file->getClientOriginalExtension();
        // $newName = rand(10000, 1000000).".".$extension;
        // $file->move('uploadsfile',$newName);
        // $data->file=$newName;
        // $data->save();
        // AlertSuccess('pesan', 'Data berhasil disimpan');
        $j= $request->input('judul');
        $p= $request->input('postingan');

        $request->session()->put('judul', $j);
        $request->session()->put('postingan', $p);
        $judul=$request->session()->get('judul');
        // $request->session()->put('judul', $judul);
        // Session::put('judul', $judul);
        // Session::put('postingan', $postingan);
        return redirect()->back() ->with(['success'=>"Sukses! ". $name . "Berhasil diupload"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
