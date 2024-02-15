@extends('app/master')
@section('contents')

<div class="vizew-login-area section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Update Profile!</h4>
                    <div class="line"></div>

                </div>
                
        </div>

            <div class="col-12 col-md-12 ">
                <div class="login-content">
                    <!-- Section Title -->
                   

                    <form action="index.html" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control text-white" id="nama"
                                value="Nabilandak PashaRadiohead">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                            <input type="email" class="form-control text-white" id="exampleInputEmail1"
                            value="layananberhentimerokok99@gmail.com">
                        </div>
                        <div class="form-group">
                        <label for="username">Username</label>
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                            value="thom Yanto">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                            <input type="password" class="form-control text-white" id="exampleInputPassword1"
                                value="thomyanto9">
                        </div>
                        <div class="form-group">
                        <label for="No Telfon">No Telfon</label>
                            <input type="number" class="form-control text-white" id="exampleInputEmail1"
                            value="085050505050505">
                        </div>
                        <div class="form-group">
                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                            <select class="form-control text-white" name="jenisKelamin" placeholder="Jenis Kelamin">
                                <option>-- Jenis Kelamin --</option>
                                <option>-- Pria --</option>
                                <option>-- Wanita --</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="Bio">Bio</label>
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                                value="You will find me in Fake Plastic Trees">
                        </div>
                        <div class="form-group">
                        <label for="Alamat">Alamat</label>
                            <textarea type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Alamat">JL. Fake Plastic Trees No.505</textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control text-white" id="foto">
                        </div>
                        <button type="submit" class="btn vizew-btn w-100 mt-30">Login</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

</section>
<!-- ##### Vizew Psot Area End ##### -->


@endsection
