@extends('app/master')
@section('contents')

<div class="vizew-login-area section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Come to join us! </h4>
                    <div class="line"></div>

                </div>
                
            </div>

            <div class="col-6 col-md-4 ">
                <div class="login-content">
                    <!-- Section Title -->
                   

                    <form action="/register-proses" method="post" enctype="multipart/form-data" autocomplete = "off">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Nama" name="name">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                               
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Email" name="email">
                                @error('email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Username" name="username">
                                @error('username')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control text-white" id="exampleInputPassword1"
                                placeholder="Password" name="password">
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="No Telfon" name="no_telepon">
                                @error('no_telepon')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-control text-white" name="jenis_kelamin" placeholder="Jenis Kelamin">
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="Laki-laki">-- Pria --</option>
                                <option value="Perempuan">-- Wanita --</option>
                            </select>
                            @error('jenis_kelamin')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Bio" name="bio">
                                @error('bio')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Alamat" name="address"></textarea>
                                @error('address')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control text-white" id="foto" name="avatar">
                            @error('avatar')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>
                        <button type="submit" class="btn vizew-btn w-100 mt-30">Register</button>
                    </form>
                    <div class="mt-3"><a href='/login' class="link-hover">Sudah Punya Akun?</a></div>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="login-content">
                    
                    <div><img src='img/images/digital-painting.jpg' alt=''></div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection
