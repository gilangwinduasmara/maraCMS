{{-- @extends('admin.layouts.master') --}}
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@section('content')
<form action="">
    <div class="form-group">
        <div class="custom-file">
            <input class="" type="file" name="file">
        </div>
        <button class="btn btn-light" type="file"><i class="fas fa-camera"></i>Upload</button>
    </div>
</form>
@endsection
