                    
                    @foreach($tampilKomentar as $t)
<li class="single_comment_area">
    <!-- Comment Content -->
    <div class="comment-content d-flex">
        <!-- Comment Author -->
        <div class="comment-author">
        <a href='/profile/{{ $t->user->id }}'>
            <img src="{{asset('img-avatar/'.$t->user->avatar)}}" alt="author">
        </a>
        </div>
        <!-- Comment Meta -->
        <div class="comment-meta">
            <a href="#" class="comment-date">{{$t->created_at->format('d-M-Y')}}</a>
            <a href='/profile/{{ $t->user->id }}'>
            <h6>{{$t->user->username}}</h6>
            </a>
            
            <p>{{$t->isi_kometar}}</p>
            <div class="d-flex align-items-center">
                                    
            </div>
        </div>
        <a href='/lapor-komentar/{{$t->id}}'>
        <i class="fa fa-exclamation-circle ml-5 laporKomen" aria-hidden="true"></i>
        </a>
    </div>
    <ol class="children">
        <li class="single_comment_area">
            <!-- Comment Content -->
        </li>
    </ol>
</li>
@endforeach
