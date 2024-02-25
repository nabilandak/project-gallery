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
                   

                    <form action="/edit-profile-proses/{{$dataProfile->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control text-white" id="nama"
                               name="name"   value="{{$dataProfile->name}}">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                            <input type="email" class="form-control text-white" id="exampleInputEmail1"
                             name="email" value="{{$dataProfile->email}}">
                        </div>
                        <div class="form-group">
                        <label for="username">Username</label>
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                             name="username" value="{{$dataProfile->username}}">
                        </div>
                        
                        <div class="form-group">
                        <label for="No Telfon">No Telfon</label>
                            <input type="number" class="form-control text-white" id="exampleInputEmail1"
                            value="{{$dataProfile->no_telepon}}" name="no_telepon">
                        </div>
                        <div class="form-group">
                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                            <select class="form-control text-white" name="jenis_kelamin" placeholder="Jenis Kelamin">
                                <option>-- Jenis Kelamin --</option>
                                    <option value="{{$dataProfile->jenis_kelamin}}" @if($dataProfile->jenis_kelamin == 'Laki-laki') selected @endif>Laki - Laki</option>
                                    <option value="{{$dataProfile->jenis_kelamin}}" @if($dataProfile->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="Bio">Bio</label>
                            <input type="text" class="form-control text-white" id="exampleInputEmail1"
                                value="{{$dataProfile->bio}}" name="bio">
                        </div>
                        <div class="form-group">
                        <label for="Alamat">Alamat</label>
                            <textarea type="text" class="form-control text-white" id="exampleInputEmail1"
                                placeholder="Alamat" name="address" >{{$dataProfile->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control text-white" id="foto" name="avatar" >
                            <input type="hidden" class="form-control text-white" id="foto" name="avatar_lama" >
                            <p>{{$dataProfile->avatar}}</p>
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
