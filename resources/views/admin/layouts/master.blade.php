<html>
    <head>
        {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        <div id="sidebar">
            <div class="sidebar-header">
                Admin
                <button onClick="tutupMenu()" class="side-button"><i class="fas fa-angle-left"></i></button>
            </div>
            <div class="sidebar-content">
                <div class="container foto">

                </div>
                <h5>{{ $name }}</h5>
                <div class="container-fluid list-menu"><a href="/admin">posting</a></div>
                <div class="container-fluid list-menu"><a href="/admin/uploads">upload</a></div>

            </div>
        </div>
        <div id="page">
            <div id="secondary-sidebar">
                <div class="menu" data-toggle="tooltip" data-placement="right" title="Buat Postingan">
                    <a href="/admin"><i class="fas fa-pen"></i></a>
                </div>
                <div class="menu" data-toggle="tooltip" data-placement="right" title="Upload File">
                    {{-- <a href="#"></a> --}}
                    <a onclick="buttonUpload()" id="" href="#" title="Show Data" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-upload"></i></a>
                </div>
                <span class="tooltip"></span>
            </div>
            <div class="header">
                <button onClick="bukaMenu()" class="side-button-open"><i class="fas fa-angle-right"></i></button>
                <h3>teees</h3>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('info'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Please check the form below for errors
            </div>
            @endif
            @yield('content')
        </div>



<!-- Upload Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form action="/admin/upload" method="POST">
        {{ csrf_field() }}
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-file-upload"></i></span>
                    </div>
                    <div class="custom-file">
                        <input onchange="onFileChange()" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label id="file-label" class="custom-file-label" for="inputGroupFile01">Choose file</label>

                    </div>
                </div>
            </div>

            <div style="display:none">
                <input type="text" id="judul2" name="judul">
                <textarea name="postingan" id="postingan2" rows="10"></textarea>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="buttonUpload()" type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    </body>
</html>
