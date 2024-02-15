@extends('app/master')
@section('contents')

<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-6">
                <div class="post-details-thumb mb-50">
                    <img src='img/images/wpap(3).jpg' alt=''>
                </div>

            </div>
            <div class="col-6">

                <div class="row justify-content-center">
                    <!-- Post Details Content Area -->
                    <div class="col-6 col-lg-12 col-xl-12">
                        <div class="post-details-content">
                            <!-- Blog Content -->
                            <div class="blog-content">

                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                    <a href="single-post.html" class="post-title mb-2">John Lennon in Wpap Pop Art
                                        Style</a>

                                    <div class="d-flex justify-content-between mb-30">
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="post-author">By Muhammad Nabil</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>

                                    </div>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper arcu. Donec
                                    maximus lacinia feugiat. Vestibulum leo odio, congue luctus luctus sit amet, porta
                                    in nunc. Mauris velit nulla, semper sit amet augue eget, iaculis maximus urna.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper arcu. Donec
                                    maximus lacinia feugiat. Vestibulum leo odio, congue luctus luctus sit amet, porta
                                    in nunc. Mauris velit nulla, semper sit amet augue eget, iaculis maximus urna.</p>

                                <div class="post-meta d-flex mt-30 mb-30">
                                    <ul>
                                        <li class="d-inline"><a href="#"><i class="icon fa fa-thumbs-o-up"
                                                    aria-hidden="true" style="font-size: 25px;"></i> 7</a></li>
                                        <li class="d-inline mx-5"><a href="#"><i class="icon fa fa-comments-o"
                                                    aria-hidden="true" style=" font-size: 25px;"></i> 32</a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12 mt-3">
                        <a href='/edit-foto' class="btn vizew-btn" style="background-color: orange;">Edit</a>
                        <a href='' class="btn vizew-btn mx-3">Delete</a>
                    </div>
                </div>
                <!-- Related Post Area -->                
            </div>
        </div>
        <div class="related-post-area mt-5">
                    <!-- Section Title -->
                    <div class="section-heading style-2">
                        <h4>Related Post</h4>
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


                    </div>
                </div>
        <div class="col-12">
            <div class="comment_area clearfix mb-50">

                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Comment</h4>
                    <div class="line"></div>
                </div>

                <ul>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="img/bg-img/31.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="comment-date">27 Aug 2019</a>
                                <h6>Tomas Mandy</h6>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam eius</p>
                                    
                                    
                                <div class="d-flex align-items-center">
                                    
                                </div>
                            </div>
                        </div>

                        <ol class="children">
                            <li class="single_comment_area">
                                <!-- Comment Content -->

                            </li>
                        </ol>
                    </li>

                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="img/bg-img/33.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="comment-date">27 Aug 2019</a>
                                <h6>Simon Downey</h6>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam eius</p>
                                <div class="d-flex align-items-center">
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="post-a-comment-area">

                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Leave a reply</h4>
                    <div class="line"></div>
                </div>

                <!-- Reply Form -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message"
                                    placeholder="Message*"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn vizew-btn mt-30" type="submit">Submit
                                    Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Breadcrumb Area End ##### -->




@endsection
