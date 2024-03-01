@extends('app/master')
@section('contents')
<!-- Preloader -->



<!-- ##### Hero Area Start ##### -->

<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>{{$album->name}}</h4>
                   
                    <div class="line"></div>
                    <br>
                    <p>{{$album->deskripsi}}</p>
                    @auth
                        @if($album->user->id == Auth::user()->id)
                    <a href='/edit-album/{{ $album->id }}' class="btn btn-primary">Edit Album</a>
                    <a href='/delete-album/{{$album->id}}' class="btn btn-secondary"  onclick="return confirm('Apakah Anda yakin ingin menghapus Album ini?')">Hapus Album</a>
                    @endif
                    @endauth
                </div>
                <div class="section-heading">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Post -->
            
                <div class="single-post-area mb-50">
                    <!-- Post Thumbnail -->
                    <div class="container-image mb-4">
                        @foreach($dataDetailAlbum as $d)
                        <a href='/detail-foto/{{$d->id}}'>
                        <img src="{{asset('/img-foto/'.$d->foto)}}" class="image-contents">
                        </a>
                        @endforeach
                       
                        
                        
                    </div>
                    <div class="d-flex justify-content-center">{{$dataDetailAlbum->links()}}</div>
                </div>
            

            <!-- Single Blog Post -->
            

            <!-- Single Blog Post -->
           
        </div>

    </div>


</section>
<!-- ##### Trending Posts Area End ##### -->


<!-- ##### Vizew Psot Area End ##### -->


@endsection
