@extends('app/master')
@section('contents')

<!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="vizew-login-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                
            <div class="col-6 col-md-6">
                    <div class="login-content">
                        <!-- Section Title -->
                        <div><img src='img/images/anime.png' alt=''></div>
                    </div>
                </div>
                <div class="col-6 col-md-6 " style= "display:flex; align-items:center;">
                    <div class="login-content" style = "width: 100%;">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Great to have you back!</h4>
                            <div class="line"></div>
                        </div>
                            
                        <form action="/login-proses" method="post" enctype="multipart/form-data" autocomplete = "off">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control text-white" id="exampleInputEmail1" placeholder="Email" name="email">
                                @error('email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control text-white" id="exampleInputPassword1" placeholder="Password" name="password">
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        
                            <button type="submit" class="btn vizew-btn w-100 mt-30">Login</button>
                            
                        </form>
                        <div class="mt-3"><a href='/register' class="link-hover">Belum Punya akun?</a></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </section>
<!-- ##### Vizew Psot Area End ##### -->
@endsection
