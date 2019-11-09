<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $p = $post->post;
            $a = substr($p, 0, 200);
            $post->post = $a . " ...";
        }
        return view('blog/index', ['posts' => $posts, 'categories' => $this->getCategory($posts)]);
    }

    public function showPost($post)
    {
        $posts = Post::all();
        // foreach($posts as $post){
        //     p =
        // }
    }

    public function getCategory($posts)
    {
        $i = 0;
        foreach ($posts as $post) {
            $c[$i] = $post->category;
            $i++;
        }
        return array_unique($c);
    }

    public function indexWithCategory($category)
    {
        $posts = Post::all();
        $c = $this->getCategory($posts);
        $i = 0;
        foreach ($posts as $post) {
            if ($post->category != $category) {
                unset($posts[$i]);
            }
            $i++;
        }
        return view('blog/index', ['posts' => $posts, 'categories' => $c]);
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
        return ($request->input('action'));
        switch ($request->input('action')) {
            case 'submit':
                $judul = $request->input('judul');
                $postingan = $request->input('postingan');
                $category = $request->input('kategori');
                $post = new Post([
                    'title' => $judul,
                    'post' => $postingan,
                    'category' => $category,
                    'author' => "Gilang Windu Asmara"
                ]);
                $post->save();
                return redirect()->back()->with(['success' => "Post berhasil dibuat!"]);
                break;
            case 'preview':
                $data = "sukses";
                $judul = $request->input('judul');
                $postingan = $request->input('postingan');
                // return $judul;
                return view('/admin/preview', ['data' => $data, 'judul' => $judul, 'postingan' => $postingan]);
                break;
        }
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
