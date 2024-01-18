@extends('app/master')
@section('title')
@section('contents')
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
@include('app/header')
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
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
                <section style="">
                   
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card author-widget">
                                    <div class="p-4">
                                        <img class="author-avatar" src="img/bg-img/30.jpg" alt="">
                                        <a href="#" class="author-name">Chris Hemsworth</a>
                                        <div class="author-social-info">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
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
                                        <p class="text-white mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">West Java - Indonesia</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3 mt-3">
                                        <a href='' class="btn vizew-btn">Edit Profil</a>
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
                                            <div class="col-12 col-md-3">
                                                <div class="single-post-area mb-30">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href=''><img src="img/bg-img/11.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-md-3">
                                                <div class="single-post-area mb-30">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href=''><img src="img/bg-img/12.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="single-post-area mb-30">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href=''><img src="img/bg-img/11.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-md-3">
                                                <div class="single-post-area mb-30">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href=''><img src="img/bg-img/12.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Centered Button -->
                                            <div class="col-12 mb-3">
                                                <a href='' class="btn vizew-btn">Manage Album</a>
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
                <div class="typography-content mb-50">
                    <div class="row">
                        <!-- Single Blog Post -->

                        <div class="single-post-area mb-50">
                            <div class="section-heading style-2">
                                <h4>My Artwork</h4>
                                <div class="line"></div>
                            </div>
                            <!-- Post Thumbnail -->
                            <div class="container-image">
                                <a href='/detail-foto'>
                                    <img src="img/images/wpap(3).jpg" class="image-contents">
                                </a>

                                <img src="img/images/sampul.jpg" class="image-contents">
                                <img src="img/images/anime.png" class="image-contents">
                                <img src="img/images/landscape.jpg" class="image-contents">
                                <img src="img/images/sampul.jpg" class="image-contents">
                                <img src="img/images/wpap(3).jpg" class="image-contents">
                                <img src="img/images/sampul.jpg" class="image-contents">
                                <img src="img/images/anime.png" class="image-contents">
                                <img src="img/images/landscape.jpg" class="image-contents">
                                <img src="img/images/sampul.jpg" class="image-contents">
                                <img src="img/images/wpap(3).jpg" class="image-contents">
                                <img src="img/images/sampul.jpg" class="image-contents">
                                <img src="img/images/anime.png" class="image-contents">
                                <img src="img/images/landscape.jpg" class="image-contents">
                                <img src="img/images/sampul.jpg" class="image-contents">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->





<!-- ##### Footer Area Start ##### -->
@include('app/footer')
<!-- ##### Footer Area End ##### -->

@endsection
