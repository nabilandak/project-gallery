
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .single-post-area:hover {
        opacity: 0.8;
        transition: opacity 0.3s ease-in-out;
    }

    .single-post-area:hover .post-thumbnail img {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }
    </style>

</head>

<body>
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ##### Header Area Start ##### -->
@if(Auth::check())
    @include('app.header')
@else
    @include('app.header-2')
@endif

<!-- ##### Header Area End ##### -->
@yield('contents')
@include('app/footer')

 <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    @if(session()->has('error'))
    Swal.fire({
        icon: "error",
        title: "{{session('error')}}",
        footer: '<a href="/login">Coba login kembali!</a>'
        });
    @endif
    </script>
    
</body>

</html>