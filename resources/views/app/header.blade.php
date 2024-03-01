<header class="header-area">


    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="{{asset('img/core-img/logo-2.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>

                                <li class=""><a href="/">Home</a></li>
                                <li><a href="archive-list.html">About</a></li>

                                <li><a href="#">Create</a>
                                    <ul class="dropdown">
                                        <li><a href="/upload-foto">- Upload Artwork</a></li>
                                        <li><a href="/create-album">- Create Album</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="d-flex">
                                        <a href="/profile/{{Auth::user()->id}}" class="">
                                            <div
                                                style="width: 50px; height: 50px; ">
                                                <img src="{{ asset('img-avatar/'.Auth::user()->avatar)}}"
                                                    alt='' style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                                            </div>
                                        </a>

                                        <ul class="dropdown">
                                            <li><a href="/profile/{{Auth::user()->id}}">-Profile</a></li>
                                            <li><a href="/edit-profile/{{ Auth::user()->id }}">- Edit Profile</a></li>
                                            <li><a href="/logout">- Logout</a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
