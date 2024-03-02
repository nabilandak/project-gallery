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


                    <form action="/edit-password-proses" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="old_password">Password Saat Ini</label>
                            <input id="old_password" type="password" class="form-control" name="old_password" required>
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password Baru</label>
                            <input id="new_password" type="password" class="form-control" name="new_password" required>
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Password Konfirmasi</label>
                            <input id="confirm_password" type="password" class="form-control" name="confirm_password" required>
                            @error('confirm_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary w-100 mt-0">Ubah Password</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</section>
<!-- ##### Vizew Psot Area End ##### -->


@endsection
