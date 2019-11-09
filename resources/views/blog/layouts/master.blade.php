<html onscroll="scroll()">
    <head>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/blog.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        <div id="top-menu" class="top-menu">

        </div>
        @extends('blog.layouts.header')
        <div class="container-fluid background">
            <img src="{{asset('images/poster.png')}}" class="img-fluid" alt="Responsive-img" srcset="">
        </div>
        <div class="links">
            <a href="/">Home</a>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop12" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    @foreach ($categories as $category)
                        <a class="dropdown-item" href="/category={{$category}}">{{$category}}</a>
                    @endforeach
                </div>
            </div>
            <a href="#footer">About</a>
        </div>
        {{-- <div class="title">
            Welcome!
        </div> --}}
        <div class="container-fluid isi">
            @yield('posts')
            <div id="footer" class="container footer">
                <h4>Gilang Windu Asmara</h4>
            </div>
        </div>

    </body>
</html>
