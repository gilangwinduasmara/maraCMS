<html>
    <head>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/post.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Preview</h1>
        </div>
        <div class="container postingan">
                <div class="judul">
                    {{ $judul }}
                </div>
                <div class="author">
                    gilang windu asmara
                </div>
                <hr>
                {{-- {{ $data }} --}}
                <div id="post">
                    <p>{!!html_entity_decode($postingan)!!}</p>
                </div>
        </div>
    </body>
</html>
