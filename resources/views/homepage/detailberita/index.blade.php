@extends('homepage.layouts.main')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{ asset('images/' . $detailsarticles->thumbnail) }}"
                            class="img-responsive post-image" alt="" />
                    </div>
                    <h1>
                        {{ $detailsarticles->judul }}

                    </h1>
                    <div class="date">
                        <ul>
                            <li>
                                Oleh <a title="" href="#"><span>{{ $detailsarticles->author }}</span></a> --
                            </li>
                            <li><a title="" href="#">{{ $detailsarticles->created_at->format('d F Y h:i A') }}</a> --</li>
                            <li>
                                <a title="" href="#"><span>275 Comments</span></a>
                            </li>
                        </ul>
                    </div>
                    <div style="text-align: justify">
                        <p>
                            @php
                                echo strip_tags($detailsarticles->article, '<p><b><i><u>');
                            @endphp
                        </p>
                    </div>

                    <!-- form
                              ============================================ -->
                    <div class="form-area">
                        <h3 class="category-headding"><i class="fa-light fa-chevrons-left"><a href="{{ route('homepage') }}"><< BACK TO HOMEPAGE</a></i></h3>
                        <div class="headding-border"></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..."
                            name="q" />
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.search area -->
                    <div class="banner-add">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block"
                                alt="" /></a>
                    </div>
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                        </ul>
                        <hr />
                        <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="#">SPORTS</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">It is a long established fact that a reader will</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/e9a3207468140278618215a173db053e.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                            <a href="#">TECHNOLOGY </a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">The generated Lorem Ipsum is therefore</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/ac4ccca8921d9e3e8a142a32ab6ecc8c.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                            <a href="#">HEALTH</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">The standard chunk of Lorem Ipsum used since</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/6f50253d2c9c817a06de93a82106957e.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-4">
                                            <a href="#">FASHION</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">Lorem Ipum therefore always free from</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                </aside>
            </div>
        </div>
    </div>
@endsection
