@extends('homepage.layouts.main')

@section('highlightsSections')
    <section>
        <div class="container">
        </div>
    </section>
@endsection

@section('contents')
   <section class="foto-post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Galeri/Foto</h2> 
            </div>

           {{-- gambar 1 --}}
            <div class="card">
                <div class="col-sm-4">
                    {{-- image ni --}}
                    <div class="post-style1">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <img src="http://pertaarungas.pertamina.com/album/cbeebdcaf9f500316bbd2d58c5818341.JPG"
                                    alt="" class="img-responsive">
                            </a>
                        <!-- post title -->
                        <div class="post-title-author-details">
                            <div class="date">
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                <a title="" href="#">Oct 6, 2016</a> --</li>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- gambar 2 --}}
                <div class="card">
                    <div class="col-sm-4">
                        {{-- image ni --}}
                        <div class="post-style1">
                                <!-- post image -->
                                <a href="#" class="video-img-icon">
                                    <img src="http://pertaarungas.pertamina.com/album/cbeebdcaf9f500316bbd2d58c5818341.JPG"
                                        alt="" class="img-responsive">
                                </a>
                            <!-- post title -->
                            <div class="post-title-author-details">
                                <div class="date">
                                            <h3><a href="#">There are many variations of passages of.</a></h3>
                                    <a title="" href="#">Oct 6, 2016</a> --</li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-sm-4">
                            {{-- image ni --}}
                            <div class="post-style1">
                                    <!-- post image -->
                                    <a href="#" class="video-img-icon">
                                        <img src="http://pertaarungas.pertamina.com/album/cbeebdcaf9f500316bbd2d58c5818341.JPG"
                                            alt="" class="img-responsive">
                                    </a>
                                <!-- post title -->
                                <div class="post-title-author-details">
                                    <div class="date">
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <a title="" href="#">Oct 6, 2016</a> --</li>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- gambar 2 --}}
            
        </div>
    </div>
</section>

@endsection

