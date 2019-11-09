@extends('blog.layouts.master')
@section('posts')
    @foreach ($posts as $post)
    <div class="jumbotron postingan">
        <h1 class="display-4">{{ $post->title }}</h1>
        <p style="text-align:right">{{$post->created_at}}</p>
        <hr>
        {{-- <p class="author" style="">{{$post->author}}</p> --}}
        <p>{!!html_entity_decode($post->post)!!}</p>
        <a href="/blog/post/{{$post->id}}">read more...</a>
    </div>
    @endforeach
@endsection
