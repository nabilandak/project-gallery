<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Space Art - Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('admin-asset/assets/images/favicon.png') }}">
    <link href="{{ asset('admin-asset/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="/admin-login-proses" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control " id="exampleInputEmail1"
                                                placeholder="Email" name="email">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control "
                                                id="exampleInputPassword1" placeholder="Password" name="password">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin-asset/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/custom.min.js') }}"></script>
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
