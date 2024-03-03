@extends('app/master')
@section('contents')

<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/images/illustration.jpg);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Create Album </h4>
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
                    

                    <p class="text-center">Pertimbangkan untuk membuat album karya Anda sendiri di Web Space Art untuk menyimpan dan menampilkan karya seni Anda</p>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mt-50">
                        <form action="/create-album-proses" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Album</label>
                                <input type="text" class="form-control text-white" id="name" name="name">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                
                            <div class="form-group">
                                <label for="Description">Deskripsi Album</label>
                                <textarea name="deskripsi" class="form-control text-white" id="Description" cols="30" rows="10" ></textarea>
                                @error('deskripsi')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="foto">Thumbnail Album</label>
                            <input type="file" class="form-control text-white" id="foto" name="thumbnail">
                            @error('thumbnail')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                            
                            <button class="btn vizew-btn mt-30" type="submit">Create Album</button>
                        </form>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
<!-- ##### Vizew Psot Area End ##### -->

@endsection
