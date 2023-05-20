@extends('homepage.layouts.main')

@section('highlightsSections')
    <section class="headding-news ">
        <div class="container">
            <div class="row row-margin">
                <div class="col-sm-3 col-padding">
                    <div class="post-wrapper post-grid-1 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{ asset('images/' . $firstleftNews->thumbnail) }}"
                                    alt="" value="{{ $firstleftNews->thumbnail }}" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-3">{{ $firstleftNews->division_name }}</span>
                            <h3 class="post-title post-title-size"><a
                                    href="{{ route('detailsberita', ['slug' => $firstleftNews->slug]) }}"
                                    rel="bookmark">{{ substr($firstleftNews->judul, 0) }}{{ strlen($firstleftNews->judul) > 50 ? '...' : '' }}</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{ date('d F Y', strtotime($firstleftNews->created_at)) }}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i>{{ $firstleftNews->views }}
                                </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-wrapper post-grid-2 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{ asset('images/' . $secondleftNews->thumbnail) }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-5">{{ $secondleftNews->division_name }}</span>
                            <h3 class="post-title post-title-size"><a
                                    href="{{ route('detailsberita', ['slug' => $secondleftNews->slug]) }}"
                                    rel="bookmark">{{ substr($secondleftNews->judul, 0) }}{{ strlen($secondleftNews->judul) > 50 ? '...' : '' }}</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{ date('d F Y', strtotime($secondleftNews->created_at)) }}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i>{{ $secondleftNews->views }}
                                </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-padding">
                    <div class="post-wrapper post-grid-3 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb-middle" src="{{ asset('images/' . $midNews->thumbnail) }}"
                                    alt="" value="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-4">{{ $midNews->division_name }}</span>
                            <h3 class="post-title"><a href="{{ route('detailsberita', ['slug' => $midNews->slug]) }}"
                                    rel="bookmark">{{ $midNews->judul }} </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i>{{ date('d F Y', strtotime($midNews->created_at)) }}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i>{{ $midNews->views }}</div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3 col-padding">
                    <div class="post-wrapper post-grid-4 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{ asset('images/' . $firstrightNews->thumbnail) }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-1">{{ $firstrightNews->division_name }}</span>
                            <h3 class="post-title post-title-size"><a
                                    href="{{ route('detailsberita', ['slug' => $firstrightNews->slug]) }}"
                                    rel="bookmark">{{ substr($firstrightNews->judul, 0) }}{{ strlen($firstrightNews->judul) > 50 ? '...' : '' }}</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i>{{ date('d F Y', strtotime($firstrightNews->created_at)) }}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i>{{ $firstrightNews->views }}
                                </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="post-wrapper post-grid-5 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{ asset('images/' . $secondrightNews->thumbnail) }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-2">{{ $secondrightNews->division_name }}</span>
                            <h3 class="post-title post-title-size"><a
                                    href="{{ route('detailsberita', ['slug' => $secondrightNews->slug]) }}"
                                    rel="bookmark">{{ substr($secondrightNews->judul, 0) }}{{ strlen($secondrightNews->judul) > 50 ? '...' : '' }}</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i>
                                    {{ date('d F Y', strtotime($secondrightNews->created_at)) }}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i
                                        class="pe-7s-comment"></i>{{ $secondrightNews->views }}</div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            <!-- item-1 -->
                            @foreach ($scrollingrecentnews as $beritascroll)
                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('images/' . $beritascroll->thumbnail) }}"
                                                    alt="" style="width: 100%; height: 250px; overflow: hidden;">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="#"
                                                    class="post-badge btn_six">{{ $beritascroll->division->nama_divisi }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a
                                            href="{{ route('detailsberita', ['slug' => $beritascroll->slug]) }}">{{ substr($beritascroll->judul, 0, 50) }}{{ strlen($beritascroll->judul) > 50 ? '...' : '' }}</a>
                                    </h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li>By <a title=""
                                                        href="#"><span>{{ $beritascroll->author }}</span></a> --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ date('d F Y', strtotime($beritascroll->created_at)) }}</a>
                                                    --</li>
                                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                                            </ul>
                                        </div>
                                        <p>{{ Str::limit(strip_tags($beritascroll->article), 80) }} <a
                                                href="{{ route('detailsberita', ['slug' => $beritascroll->slug]) }}">Read
                                                more...</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row rn_block">
                        @foreach ($otherLatestNews as $beritalain)
                            <div class="col-md-4 col-sm-4 padd">
                                <div class="home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('images/' . $beritalain->thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="#"
                                                    class="post-badge btn_eight">{{ $beritalain->division->nama_divisi }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a
                                                href="{{ route('detailsberita', ['slug' => $beritalain->slug]) }}">{{ substr($beritalain->judul, 0, 50) }}{{ strlen($beritalain->judul) > 50 ? '...' : '' }}</a>
                                        </h4>
                                        <div class="date">
                                            <ul>
                                                <li>By <a title=""
                                                        href="#"><span>{{ $beritalain->author }}</span></a> --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ date('d F Y', strtotime($beritalain->created_at)) }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                @foreach ($broadcasts as $broadcast)
                <div class="banner-add">
                    <span class="add-title"> - Broadcast - </span>
                    <div id="slideshow">
                        <a href="#"><img src="{{ asset('broadcast/' . basename($broadcast->image)) }}" class="img-responsive center-block" alt="">{{ $broadcast->id }}</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- side content end -->

            <div class="col-sm-4 left-padding">
                <aside>
                    <h3 class="category-headding ">RHISOL RANK</h3>
                    <div class="headding-border bg-color-2"></div>
                    <div class="cats-widget">
                        <ul>
                            <li class=""><a href="#" title="Title goes here.">1. Chairul Azdaman</a> <span>20
                                    Laporan</span></li>
                            <li class=""><a href="#" title="Title goes here.">2. Budiman</a> <span>18
                                    Laporan</span></li>
                            <li class=""><a href="#">3. Arianto</a> <span>16 Laporan</span></li>
                            <li class=""><a href="#" title="Title goes here.">4. Agus</a> <span>15
                                    Laporan</span></li>
                            <li class=""><a href="#">5. Siska</a> <span>14 Laporan</span></li>
                            <li class=""><a href="#">6. Nanda</a> <span>13 Laporan</span></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
        <!-- row end -->
    </div>
@endsection

@section('videosSections')
    <section class="video-post-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="category-headding ">VIDEO POST</h3>
                    <div class="headding-border"></div>
                </div>
                @foreach ($videos as $video )
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <video  src="{{ asset('videos/' . $video->video) }} "
                                    alt="" class="img-responsive">
                                </video>
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">{{ "$video->judul" }}</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>{{ "$video->author" }}</span></a> --</li>
                                    <li><a title="" href="#">{{ date('d F Y', strtotime($video->created_at)) }}</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
