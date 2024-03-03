@extends('app/master')
@section('contents')


  <section class="contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                    <h4>Edit Album </h4>
                    <div class="line"></div>

                </div>

                    
                    <p>Kami mengerti bahwa kesalahan dapat terjadi. Jangan khawatir, Anda dapat dengan mudah mengedit album Anda untuk memperbaiki kesalahan. Gunakan fitur edit kami untuk membuat perubahan yang diperlukan dan pastikan album Anda mencerminkan karya seni Anda dengan sempurna. Terima kasih atas kerjasama Anda!</p>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mt-50">
                        <form action="/edit-album-proses/{{$dataAlbumEdit->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Album</label>
                                <input type="text" class="form-control text-white" id="name" name="name" value="{{$dataAlbumEdit->name}}">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                
                            <div class="form-group">
                                <label for="Description">Deskripsi Album</label>
                                <textarea name="deskripsi" class="form-control text-white" id="Description" cols="30" rows="10" >{{$dataAlbumEdit->deskripsi}}</textarea>
                                @error('deskripsi')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="foto">Thumbnail Album</label>
                            <input type="file" class="form-control text-white" id="foto" name="thumbnail">
                            <input type="hidden" class="form-control text-white" id="foto" name="thumbnail_lama" >
                            <p>{{$dataAlbumEdit->thumbnail}}</p>
                            <p></p>
                            @error('thumbnail')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                            
                            <button class="btn vizew-btn mt-30" type="submit">Submit</button>
                        </form>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
<!-- ##### Vizew Psot Area End ##### -->

@endsection
