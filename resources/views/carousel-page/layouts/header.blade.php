<div class="top_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-sm-4">
                <div class="header-logo">
                    <!-- logo -->
                    <a href="home-style-one.html">
                        <img class="td-retina-data img-responsive" src="{{ asset('images/BUMN.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-sm-push-3">
                <div class="header-logo">
                    <!-- logo -->
                    <a href="home-style-one.html">
                        <img class="td-retina-data img-responsive" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- navbar -->
<div class="container hidden-xs">
    <nav class="navbar">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('homepage') }}" class="category01">HOME</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">BERITA FUNGSI
                        <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu menu-slide">
                        @foreach ($divisions as $division)
                            <li><a
                                    href="{{ route('division.beritafungsi', ['id' => $division->id]) }}">{{ $division->nama_divisi }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">APLIKASI INTERNAL
                        <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu menu-slide">
                        <li><a href="#">LEMON</a></li>
                        <li><a href="#">COPER</a></li>
                        <li><a href="#">PAGAR</a></li>
                        <li><a href="#">TM ONLINE</a></li>
                        <li><a href="#">SIH</a></li>
                        <li><a href="#">INVOICE TRACKING</a></li>
                        <li><a href="#">I-AM</a></li>
                        <li><a href="#">RHISOL</a></li>
                        <li><a href="#">STK ONLINE</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('internalbroadcast') }}" class="category04">INTERNAL BROADCAST</a></li>
                <li><a href="{{ route('documentmanagement') }}" class="category05">DOCUMENT MANAGEMENT</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">GALLERY & VIDEO
                        <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu menu-slide">
                        <li><a href="{{ route('albumphoto') }}">Photo</a></li>
                        <li><a href="{{ route('video') }}">Video</a></li>
                    </ul>
                </li>
                <li><a class="category04" style="color: transparent;">int-</a></li>
            </ul>
        </div>

        <!-- navbar-collapse -->
    </nav>
</div>
<div style="margin-left: 115px; margin-right: 115px;">
    <div class="col-sm-12 col-md-12" style="background-color: rgba(188, 179, 179, 0.23); font-size: 1.4em;">
        <marquee behavior="scroll" direction="left" style="width: 100%;">
            <div class="newsticker">
                <div>
                    <style>

                    </style>
                    @foreach ($livebroadcast as $pesan)
                        <a href="#" style="">
                            <span class="rounded-border-2"><b>NEWS </b></span>{{ $pesan->deskripsi }}
                        </a> <a href="" style="color: black"><b> --</b></a>
                    @endforeach
                </div>
            </div>
        </marquee>
    </div>
</div>
