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

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mt-50">
                        <form action="/edit-album-proses/{{$dataAlbumEdit->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">name</label>
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                                <input type="text" class="form-control text-white" id="name" name="name" value="{{$dataAlbumEdit->name}}">
                            </div>
                
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea name="deskripsi" class="form-control text-white" id="Description" cols="30" rows="10" >{{$dataAlbumEdit->deskripsi}}</textarea>
                                @error('deskripsi')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="foto">Thumbnail</label>
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
