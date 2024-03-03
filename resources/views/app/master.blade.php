
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <style>
    .single-post-area:hover {
        opacity: 0.8;
        transition: opacity 0.3s ease-in-out;
    }

    .single-post-area:hover .post-thumbnail img {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }
    .form-img img {
        height: 1000px !important; /* Tinggi gambar = tinggi form input - (padding atas dan bawah * 2) */
        width: auto; /* Biarkan lebar gambar mengikuti proporsi aslinya */
        margin-bottom: 15px; /* Jarak antara gambar dan input */
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
@if(Auth::check() && Auth::user()->role === 'user')
    @include('app.header')
@else
    @include('app.header-2')
@endif

<!-- ##### Header Area End ##### -->
@yield('contents')
@include('app/footer')

 <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    // Gunakan jQuery noConflict mode
    var jQuery3_7_1 = $.noConflict(true);
    // Sekarang Anda bisa menggunakan jQuery3_7_1 sebagai pengganti $ untuk jQuery versi 3.7.1
</script>


    @yield('script')
    <script>
    @if(session()->has('error'))
    Swal.fire({
        icon: "error",
        title: "{{session('error')}}",
        });
    @endif
    </script>

@include('sweetalert::alert')
    
</body>

</html>