@extends('app/master')
@section('contents')

<section class="hero--area section-padding-80">
   
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Lapor Profile</h4>
                    <div class="line"></div>

                </div>

            </div>
        </div>

        <div class="row">

        </div>

    </div>


</section>
<!-- ##### Trending Posts Area End ##### -->

<section class="contact-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12">
                <!-- Section Heading -->


                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>

                <!-- Contact Form Area -->
                <div class="contact-form-area mt-50">
                    <form action="/lapor-profile-proses/{{$tampilUser->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="inputKomentarId" name="id_user" value="{{$tampilUser->id}}">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Alasan:</label>
                            <textarea class="form-control text-white" id="message-text" name="alasan"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Vizew Psot Area End ##### -->

@endsection
