@extends('app/master')
@section('title', 'Space Art')
@section('contents')
<!-- Preloader -->



<!-- ##### Hero Area Start ##### -->
<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/images/sampul.jpg);">



                            <!-- Post Content -->
                            <div class="post-content">
                                <p class="post-cata">HOME</p>
                                <p class="post-title">Eksplor banyaknya karya seni yang indah yang diunggah di space art!</p>

                            </div>


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
                    @if(request('search'))
                    <h4>Browse by : {{request('search')}} </h4>
                    @else
                    <h4>Browse All </h4>
                    @endif
                    <div class="line"></div>

                </div>
                <div class="section-heading">
                    
                    <ul>
                        @foreach($kategori as $k)
                        <li class="d-inline p-2"><a href='/category-detail/{{$k->id}}'>{{$k->nama}}</a></li>
                        @endforeach
                    </ul>
                    <form action="">
                    <div class="input-group rounded mt-5 d-flex justify-content-center">
                        <input type="search" class="form-control rounded text-white" placeholder="Cari berdasarkan Judul Karya" aria-label="Search"
                            aria-describedby="search-addon" name="search" value="{{request('search')}}"/>
                        <button class="input-group-text border-0" id="search-addon" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Post -->
           
                <div class="single-post-area mb-50">
                    <!-- Post Thumbnail -->
                    <div class="container-image mb-4">
                        @if($foto->count())
                        @foreach($foto as $f)
                            <a href='/detail-foto/{{$f->id}}'>
                            <img src="{{ asset('img-foto/'.$f->foto)}}" class="image-contents">
                            </a>
                         @endforeach

                        @else
                        <div class="section-heading d-flex justify-content-center">
                             <h4 class="text-center">Not Post Found :(</h4>
                         </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">{{$foto->links()}}</div>
                    
                </div>
               
            

            <!-- Single Blog Post -->
            

            <!-- Single Blog Post -->
           
        </div>

    </div>


</section>
<!-- ##### Trending Posts Area End ##### -->


<!-- ##### Vizew Psot Area End ##### -->


@endsection
