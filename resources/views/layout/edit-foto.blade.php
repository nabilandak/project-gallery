@extends('app/master')
@section('contents')

<div class="vizew-login-area section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h4>Update Foto</h4>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="login-content text-center">
                    <img src='img/images/digital-painting.jpg' alt='' class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4">
                <div class="login-content">
                    <!-- Section Title -->

                    <form action="index.html" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control text-white" id="judul" value="Salvador Dali Digital Painting">
                        </div>
                        <div class="form-group">
                            <label for="deskription">Deskription</label>
                            <textarea class="form-control text-white" id="deskription">This is illustration of Salvador Dali with Digital Painting Style Art</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control text-white" name="category">
                                <option>-- DEFAULT --</option>
                                <option>-- WPAP --</option>
                                <option>-- VECTOR --</option>
                                <option>-- SC-FI --</option>
                                <option>-- POP ART --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="album">Album</label>
                            <select class="form-control text-white" name="album">
                                <option>-- DEFAULT --</option>
                                <option>-- The Bends --</option>
                                <option>-- DOTM --</option>
                                <option>-- The Wall --</option>
                                <option>-- OKNOTOK --</option>
                            </select>
                            <span><a href='/create-album' style="text-decoration: underline">Klik disini untuk membuat album! </a></span>
                        </div>

                        <button type="submit" class="btn vizew-btn w-100 mt-30">Update</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

</section>

@endsection
