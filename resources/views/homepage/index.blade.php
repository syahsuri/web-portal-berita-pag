@extends('homepage.layouts.main')

@section('highlightsSections')
    <section class="headding-news">
        <div class="container">
            <div class="row row-margin">
                <div class="col-sm-3 col-padding">
                    <div class="post-wrapper post-grid-1 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb"
                                    src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-3">SPORTS </span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark"> The generated Lorem
                                    Ipsum is therefore always free from . </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-wrapper post-grid-2 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb"
                                    src="https://pertaarungas.pertamina.com/gambar/e9a3207468140278618215a173db053e.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-5">BUSINESS</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">Contrary to popular
                                    belief, Lorem Ipsum is not simply random text. </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
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
                                <img class="entry-thumb-middle"
                                    src="https://pertaarungas.pertamina.com/gambar/ac4ccca8921d9e3e8a142a32ab6ecc8c.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-4">FASHION</span>
                            <h3 class="post-title"><a href="#" rel="bookmark">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
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
                                <img class="entry-thumb"
                                    src="https://pertaarungas.pertamina.com/gambar/6f50253d2c9c817a06de93a82106957e.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-1">TRAVEL</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The standard chunk of
                                    Lorem Ipsum used since the 1500s is reproduced</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-wrapper post-grid-5 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb"
                                    src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-2">TECHNOLOGY</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The 20 free things in
                                    Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
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
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a>
                                </h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/ac4ccca8921d9e3e8a142a32ab6ecc8c.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_sev">I</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a>
                                </h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                            <!-- item-3 -->
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/ac4ccca8921d9e3e8a142a32ab6ecc8c.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a>
                                </h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rn_block">
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/e9a3207468140278618215a173db053e.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/e9a3207468140278618215a173db053e.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Broadcast -</span>
                    <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block"
                            alt=""></a>
                </div>

            </div>
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
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="http://pertaarungas.pertamina.com/album/cbeebdcaf9f500316bbd2d58c5818341.JPG"
                                    alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="http://pertaarungas.pertamina.com/galeri/aafc59947ee716e53a7a1fa4a5a592cb.JPG"
                                    alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="http://pertaarungas.pertamina.com/album/9b00f65295924e8a4184bd57fe3833d1.jpg"
                                    alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
