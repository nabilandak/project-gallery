@extends('app/master')
@section('contents')

<div class="vizew-typography-area mb-80" style="margin-top: 40px;">
    <div class="container">


        <div class="row justify-content-center">



            <div class="col-lg-12 col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-4" >
                                <thead >
                                    <tr>

                                        <th style="border: none" >Foto</th>
                                        <th style="border: none">Username</th>
                                        <th style="border: none">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($followings as $data)
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href="">
                                                    <img width="35" src="{{ asset('img-avatar/'.$data->following->avatar) }}" alt="" class="rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $data->following->username }}</td>
                                        <td>
                                            <div class="col-12 mb-3">
                                            
                                                @if(Auth::user()->id !== $data->following->id && $data->status !== 'no_active')
                                                    <form id="followForm">
                                                        @csrf
                                                        <input type='hidden' id='user-identifier' name='user_identifier' value="{{ $data->following->id }}">
                                                        <button class="btn btn-{{ $data->isFollowed ? 'secondary' : 'primary' }} follow-button" type="button" id="follow"> {{ $data->isFollowed ? 'Unfollow' : 'Follow' }}</button>
                                                    </form>
                                                @else
                                                    <form id="followForm" hidden>
                                                        @csrf
                                                        <input type='hidden' id='user-identifier' name='user_identifier' value="{{ $data->following->id }}">
                                                        <button class="btn btn-primary follow-button" type="button" id="follow">Follow</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>

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
