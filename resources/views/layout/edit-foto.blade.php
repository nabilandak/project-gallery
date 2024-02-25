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
                    <img src="{{ asset('img-foto/'.$dataPostingan->foto)}}" alt='' class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4">
                <div class="login-content">
                    <!-- Section Title -->

                    <form action="/edit-foto-proses/{{$dataPostingan->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control text-white" id="judul" value="{{$dataPostingan->judul}}" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="deskription">Deskription</label>
                            <textarea class="form-control text-white" id="deskription" name="deskripsi">{{$dataPostingan->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control text-white" name="kategori_id">
                                <option>-- DEFAULT --</option>
                                @foreach($dataKategori as $d)
                                    <option value="{{$d->id}}" @if($d->id == $dataPostingan->kategori->id) selected @endif>{{$d->nama}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="album">Album</label>
                            <select class="form-control text-white"  name="album_id">
                                <option>-- DEFAULT --</option>
                                @foreach($dataAlbum as $d)
                                    <option value="{{$d->id}}" @if($d->id == $dataPostingan->album->id) selected @endif>{{$d->name}}</option>
                                 @endforeach
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
