@extends('admin.layouts.master')

@section('content')
<div class="container content">
    <h1 class="container">Posting</h1>

    <form action="/admin/post" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputJudul">Judul :</label>
            <input id="judul" type="text" class="form-control" name="judul" placeholder="Masukkan judul" value="{{Session::get('judul')}}">
            <label for="kategori">Kategori :</label>
            <input id="Kategori" type="text" class="form-control" name="kategori" placeholder="kategori" value="">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="inputPostingan">Postingan :</label>
            <button onclick="bold()" type="button" class="btn btn-outline-dark btn-sml"><i class="fas fa-bold"></i></button>
            <button onclick="italic()" type="button" class="btn btn-outline-dark btn-sml"><i class="fas fa-italic"></i></button>
            <button onclick="br()" type="button" class="btn btn-outline-dark btn-sml">br</button>
            <button onclick="p()" type="button" class="btn btn-outline-dark btn-sml">p</button>
        <textarea type="text" class="form-control" id="postingan" name="postingan" placeholder="Posting..." >{{Session::get('postingan')}}</textarea>
            <button type="button" onclick="lorem()" class="btn">Sample</button>
        </div>


        <button class="btn btn-secondary btn-sml" type="submit" name="action" value="preview">Preview</button>
        <button type="submit" class="btn btn-primary" name="action" value="post">Submit</button>
    </form>


</div>

@endsection
