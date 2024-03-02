@extends('app/master')
@section('contents')


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
                                        <div class="d-flex justify-content-center">
                                            <div>
                                            @if(Auth::user()->id !== $dataProfileUser->id && $dataProfileUser->status !== 'no_active')
                                            <a href='/lapor-profile/{{ $dataProfileUser->id }}' class="mr-2">
                                                <i class="fa fa-exclamation-circle laporKomen" aria-hidden="true"></i>
                                            </a>
                                            @endif
                                            </div>
                                            <div>
                                            @if($dataProfileUser->status == 'no_active')
                                        <p><a href="#" class="text-danger">Akun Di banned!</a></p>
                                        @endif
                                                <a href="#" class="author-name">{{ $dataProfileUser->username }}</a>
                                            </div>
                                        </div>


                                        <p><a href="#">{{ $dataProfileUser->bio }}</a></p>
                                        
                                        <div class="col-12 mb-3">
                                            @if(Auth::user()->id == $dataProfileUser->id)
                                                <a href='/edit-profile/{{ $dataProfileUser->id }}'
                                                    class="btn btn-primary">Edit Profil</a>

                                            @endif
                                            @if(Auth::user()->id !== $dataProfileUser->id && $dataProfileUser->status !== 'no_active')
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
                                            <div>

                                            </div>


                                        </div>
                                    </div>

                                    <div class="authors--meta-data d-flex">
                                        <p><a href='/detail-followers/{{$dataProfileUser->id}}' class="text-white">
                                            Followers<span
                                                class="">{{ $dataProfileUser->followers()->count() }}</span>
                                                </a>
                                        </p>
                                        <p><a href='/detail-following/{{$dataProfileUser->id}}' class="text-white"> Following<span
                                                class="">{{ $dataProfileUser->following()->count() }}</span>
                                            </a>
                                        </p>
                                    </div>



                                </div>

                            </div>
                            
                            <div class="col-lg-8 single-widget card">
                            @if($dataProfileUser->status == 'no_active')
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status Akun</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-danger mb-0">Akun Di Banned!</p>
                                    </div>

                                </div>
                                @endif
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-white mb-0">{{ $dataProfileUser->name }}</p>
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
                                <hr>
                                


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
                            <div class="section-heading style-2 d-flex ">
                                <h4 class="mr-4">My Artwork</h4>
                                @if(Auth::user()->id == $dataProfileUser->id)
                                    <a href='/upload-foto' class="btn btn-primary">Add Photo</a>
                                @endif
                            </div>
                            <div class="line"></div>

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
