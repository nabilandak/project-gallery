@extends('app/master')
@section('contents')
@include('layout.modal')


<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-6">
                <div class="post-details-thumb mb-50">
                    <img src="{{ asset('img-foto/'.$dataPostingan->foto) }}" alt=''>
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


                                    <a href="#"
                                        class="post-cata cata-sm cata-danger">{{ $dataPostingan->kategori->nama }}</a>
                                    <i class="fa fa-exclamation-circle ml-5" aria-hidden="true" data-toggle="modal"
                                        data-target="#exampleModal"></i>

                                    <a href="single-post.html" class="post-title mb-2">{{ $dataPostingan->judul }}</a>

                                    <div class="d-flex justify-content-between mb-30">
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="/profile/{{ $dataPostingan->user->id }}"
                                                class="post-author">By: {{ $dataPostingan->user->name }}</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#"
                                                class="post-date">{{ $dataPostingan->created_at->format('Y-m-d') }}</a>

                                        </div>


                                    </div>
                                </div>

                                <p>{{ $dataPostingan->deskripsi }}</p>

                                <div class="post-meta d-flex align-items-center">
                                    <ul class="d-flex">
                                        <li class="d-block align-items-center mr-2">Like: <span id="likeCount"
                                                class="ml-2">{{ $dataPostingan->like->count() }}</span></li>
                                        <li class="d-block align-items-center mr-2">Komentar: <span id="likeCount"
                                                class="ml-2">{{ $dataPostingan->komentar->count() }}</span></li>
                                    </ul>
                                </div>

                                <div class="post-meta row mt-30 mb-30">
                                    <ul class="d-flex">
                                        <li class="d-flex align-items-center ml-3 mr-3">

                                            <div>
                                                <button
                                                    data-liked="{{ $dataPostingan->like->contains('user_id', auth()->id()) ? 'true' : 'false' }}"
                                                    class="btn btn-primary bg-none" id="likeButton"
                                                    data-post-id="{{ $dataPostingan->id }}">
                                                    <i class="icon fa fa-thumbs-o-up mr-2" aria-hidden="true"
                                                        style="font-size: 25px;" id="not-like"></i>
                                                    <i class="icon fa fa-thumbs-up" style="font-size: 25px;"
                                                        id="liked"></i>
                                                </button>
                                            </div>

                                        </li>
                                        <li class="d-flex align-items-center">
                                            <button id="btnKomentar" class="btn btn-primary"
                                                data-target="#isi_komentar"><i class="icon fa fa-comments-o mr-2"
                                                    aria-hidden="true" style="font-size: 25px;"></i></button>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12 mt-3">
                    @auth
                        @if($dataPostingan->user->id == Auth::user()->id)
                            <a href='/edit-foto/{{ $dataPostingan->id }}' class="btn vizew-btn" style="background-color: orange;">Edit</a>
                            <a href='/delete-foto-proses/{{ $dataPostingan->id }}' class="btn vizew-btn mx-3"  onclick="return confirm('Apakah Anda yakin ingin menghapus Postingan ini?')">Delete</a>
                        @endif
                    @endauth


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
                @foreach($relatedPostingan as $key => $r)
                    @if($key < 4)
                        <div class="col-12 col-md-3">
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <a href='/detail-foto/{{ $r->id }}'><img
                                            src="{{ asset('img-foto/'.$r->foto) }}" alt=""></a>
                                </div>

                            </div>
                        </div>
                    @else
                        @break
                    @endif
                @endforeach




            </div>
        </div>
        <div class="col-12">


            <div class="comment_area clearfix mb-50">

                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Comment</h4>
                    <div class="line"></div>
                </div>

                <ul id='komentar'>
                    <!-- Single Comment Area -->


                    <!-- Single Comment Area -->

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
                    <form id="comment_form">
                        <div class="row">
                            @if(Auth::check())
                                <div class="col-12">
                                    <input type='hidden' id='postingan_id' name='postingan_id'
                                        value="{{ $dataPostingan->id }}">
                                    <textarea name="isi_komentar" class="form-control text-white" id="isi_komentar"
                                        placeholder="Masukan komentar!"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn vizew-btn mt-30" type="submit">Submit
                                        Comment</button>
                                </div>
                            @else
                                <div class="col-12">
                                    <input type='hidden' id='postingan_id' name='postingan_id'
                                        value="{{ $dataPostingan->id }}">
                                    <textarea name="isi_komentar" class="form-control text-white" id="isi_komentar"
                                        placeholder="Harap login terlebih dahulu untuk mengisi komentar!"
                                        disabled></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn vizew-btn mt-30" type="button" disabled>Submit
                                        Comment</button>
                                </div>
                            @endif

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
@section('script')

<script>
    function read() {
        $.get("/comment-read/{{ $dataPostingan->id }}", {}, function (data) {
            $('#komentar').html(data);
        });
    }
    $(document).ready(function () {
        read();

        $('#komentar').on('click', '.laporKomen', function () {
            $('#exampleModal2').show();
            var komenId = $(this).data('komen-id');

            $.ajax({
                url: '/report-view/' + komenId,
                type: 'get',
                success: function (res) {
                    console.log(res)
                }
            })
        });






        $('#btnKomentar').click(function () {
            // Mendapatkan target elemen yang akan dituju
            var target = $(this).data('target');

            // Mendapatkan tinggi dan posisi tengah elemen target
            var targetHeight = $(target).outerHeight();
            var targetOffset = $(target).offset().top;
            var windowHeight = $(window).height();
            var scrollToPosition = targetOffset - (windowHeight / 2) + (targetHeight / 2);

            // Melakukan scroll ke posisi tengah elemen target
            $('html, body').animate({
                scrollTop: scrollToPosition
            }, 1000); // Waktu animasi dalam milidetik (1000ms = 1 detik)
        });

        const isLiked = $('#likeButton').data('liked');
        if (isLiked === true) {
            $('#not-like').hide()
            $('#liked').show();
        } else {
            $('#not-like').show()
            $('#liked').hide();
        }
        $('#likeButton').click(function () {
            const postId = $(this).data('post-id');
            const likeUrl = `/like-post/${postId}`;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: likeUrl,
                type: "post",
                success: function (data) {
                    if (data.liked) {
                        $('#not-like').hide()
                        $('#liked').show();
                    } else {
                        $('#not-like').show()
                        $('#liked').hide();
                    }
                    $('#likeCount').text(data
                    .countLike); // Menggunakan .text() untuk mengganti teks di dalam elemen #likeCount
                },
                error: function (jqXHR, ajaxOptions, thrownError) {
                    console.log('server error');
                }
            });

        });

        $('#comment_form').submit(function (e) {
            e.preventDefault();
            const postId = document.getElementById("postingan_id").value;
            const commentUrl = `/comment-post/${postId}`;
            var formData = new FormData(this);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: false,
                processData: false, // perbaikan pada penulisan
            });

            $.ajax({
                url: commentUrl,
                type: "post",
                data: formData,
                success: function (res) {
                    read();
                    $('#comment_form')[0].reset();
                }
            });
        });
    });

</script>
@endsection
