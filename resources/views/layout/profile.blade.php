@extends('app/master')
@section('contents')

<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Features</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Typography</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="vizew-typography-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <!-- Typography Content -->
                <section style="" class="m-2">
                   
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-4 mb-5">
                                <div class="card author-widget">
                                    <div class="p-4">
                                        <img class="author-avatar" src="{{ asset('img-avatar/'.Auth::user()->avatar)}}" alt="">
                                        <a href="#" class="author-name">{{Auth::user()->name}}</a>
                                        <p><a href="#" class="author-name">{{ Auth::user()->bio}}</a></p>
                                        <div class="col-12 mb-3">
                                            <a href='' class="btn vizew-btn">Follow</a>
                                        </div>
                                    </div>

                                    <div class="authors--meta-data d-flex">
                                        <p class>Followers<span class="counter">80</span></p>
                                        <p>Following<span class="counter">230</span></p>
                                    </div>


                                </div>

                            </div>
                            <div class="col-lg-8 single-widget card">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{Auth::user()->no_telepon}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{Auth::user()->address}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3 mt-3">
                                        <a href='/edit-profile' class="btn vizew-btn">Edit Profil</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="related-post-area mt-5">
                                        <!-- Section Title -->
                                        <div class="section-heading style-2">
                                            <h4>My Album</h4>
                                            <div class="line"></div>
                                        </div>

                                        <div class="row">

                                            <!-- Single Blog Post -->
                                            @foreach($dataAlbum as $d)
                                            <div class="col-12 col-md-3">
                                                <div class="single-post-area mb-30">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href=''><img src="{{ asset('img-thumbnail/'.$d->thumbnail)}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            

                                            <!-- Centered Button -->
                                            <div class="col-12 mb-3">
                                                <a href='/create-album' class="btn vizew-btn">Add Album</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </div>

                        </div>

                    </div>
                </section>

                <!-- Typography Content -->
                <div class="typography-content mb-50 m-4">
                    <div class="row">
                        <!-- Single Blog Post -->

                        <div class="single-post-area mb-50">
                            <div class="section-heading style-2">
                                <h4>My Artwork</h4>
                                <div class="line"></div>
                            </div>
                            <!-- Post Thumbnail -->
                            @foreach($dataPostingan as $d)
                            <div class="container-image">
                                <a href='/detail-foto'>
                                <img src="{{ asset('img-foto/'.$d->foto)}}" alt="" class="image-contents">
                                </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
@endsection
