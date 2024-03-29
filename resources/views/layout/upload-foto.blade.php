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
                            style="background-image: url(img/images/japan.jpg);">
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
                    <h4>Upload Art Work </h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Trending Posts Area End ##### -->

  <section class="contact-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <!-- Section Heading -->
                    <p class="text-center">Ayo bergabunglah dengan komunitas kami di Web Space Art! Bagikan karya seni Anda dan dapatkan apresiasi dari sesama penggemar seni.</p>
                    <form action="/upload-foto-proses" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                    <div class="contact-form-area mt-50">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control text-white" id="judul" name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="Description">Deskripsi</label>
                                <textarea class="form-control text-white" id="Description" cols="30" rows="10" name="deskripsi" >{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class ="form-control text-white" name="kategori_id">
                                    <option value="">-- DEFAULT --</option>
                                    @foreach($dataKategori as $d)
                                    <option value="{{$d->id}}">{{$d->nama}}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="album">Album (Optional)</label>

                                <select class ="form-control text-white" name="album_id">
                                    <option value="">-- DEFAULT --</option>
                                    @foreach($dataAlbum as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                                @error('album_id')
                                <small class="text-danger">{{$message}}</small>
                                 @enderror
                                <span><a href='/create-album' style="text-decoration: underline ">Klik disini untuk membuat album! </a></span>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control text-white" id="foto" name="foto">
                                @error('foto')
                                <small class="text-danger">{{$message}}</small>
                                 @enderror
                            </div>
                            <button class="btn vizew-btn mt-30" type="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
<!-- ##### Vizew Psot Area End ##### -->


@endsection
