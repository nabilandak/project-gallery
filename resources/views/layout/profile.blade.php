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
                                        <img class="author-avatar"
                                            src="{{ asset('img-avatar/'.$dataProfileUser->avatar) }}"
                                            alt="">
                                        <a href="#" class="author-name">{{ $dataProfileUser->name }}</a>
                                        <p><a href="#">{{ $dataProfileUser->bio }}</a></p>
                                        <div class="col-12 mb-3">
                                            @if(Auth::user()->id == $dataProfileUser->id)
                                                <a href='/edit-profile/{{ $dataProfileUser->id }}'
                                                    class="btn btn-primary">Edit Profil</a>

                                            @endif
                                            @if(Auth::user()->id !== $dataProfileUser->id)
                                                @if($data_follow)
                                                    <form id="followForm">
                                                        @csrf
                                                        <input type='hidden' id='user-identifier' name='user_identifier'
                                                            value="{{ $dataProfileUser->id }}">
                                                        <button class="btn btn-secondary follow-button" type="button"
                                                            id="follow">Unfollow</button>
                                                    </form>
                                                @else
                                                    <form id="followForm">
                                                        @csrf
                                                        <input type='hidden' id='user-identifier' name='user_identifier'
                                                            value="{{ $dataProfileUser->id }}">
                                                        <button class="btn btn-primary follow-button" type="button"
                                                            id="follow">Follow</button>
                                                    </form>
                                                @endif
                                            @else
                                                <form id="followForm" hidden>
                                                    @csrf
                                                    <input type='hidden' id='user-identifier' name='user_identifier'
                                                        value="{{ $dataProfileUser->id }}">
                                                    <button class="btn btn-primary follow-button" type="button"
                                                        id="follow">Follow</button>
                                                </form>
                                            @endif


                                        </div>
                                    </div>

                                    <div class="authors--meta-data d-flex">
                                    <p>Followers<span class="counter">{{ $dataProfileUser->followers()->count() }}</span></p>
                                        <p>Following<span class="counter">{{ $dataProfileUser->following()->count() }}</span>
                                        </p>
                                    </div>



                                </div>

                            </div>
                            <div class="col-lg-8 single-widget card">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{ $dataProfileUser->username }}</p>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{ $dataProfileUser->no_telepon }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{ $dataProfileUser->address }}</p>
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
                                                            <a href='/detail-album/{{ $d->id }}'><img
                                                                    src="{{ asset('img-thumbnail/'.$d->thumbnail) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach



                                            <!-- Centered Button -->
                                            @if(Auth::user()->id == $dataProfileUser->id)
                                            <div class="col-12 mb-3">
                                                <a href='/create-album' class="btn btn-primary">Add Album</a>
                                            </div>
                                            @endif
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

                            <div class="container-image">
                                @foreach($dataPostingan as $d)
                                    <a href='/detail-foto/{{ $d->id }}'>
                                        <img src="{{ asset('img-foto/'.$d->foto) }}" alt=""
                                            class="image-contents">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Event handler saat tombol follow diklik
        $('.follow-button').on('click', function () {
            // Simpan referensi tombol yang diklik
            var button = $(this);
            // Ubah status follow
            var isFollowing = !button.hasClass('btn-primary');

            // Ubah tampilan tombol follow
            if (isFollowing) {
                button.removeClass('btn-secondary').addClass('btn-primary').text('Follow');
            } else {
                button.removeClass('btn-primary').addClass('btn-secondary').text('Unfollow');
            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#follow').click(function () {
            var formData = new FormData($('#followForm')[0]);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            $.ajax({
                url: '/follow/user',
                method: 'POST',
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    // Handle success response
                },
                error: function (response) {
                    console.log('error');
                }
            });
        });
    });

</script>


<!-- ##### Breadcrumb Area End ##### -->
@endsection
