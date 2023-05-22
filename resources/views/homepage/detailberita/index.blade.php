@extends('homepage.layouts.main')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{ asset('images/' . $detailsarticles->thumbnail) }}" class="img-responsive post-image"
                            alt="" />
                    </div>
                    <h1>
                        {{ $detailsarticles->judul }}

                    </h1>
                    <div class="date">
                        <ul>
                            <li>
                                Oleh <a title="" href="#"><span>{{ $detailsarticles->author }}</span></a> --
                            </li>
                            <li><a title=""
                                    href="#">{{ $detailsarticles->created_at->format('d F Y h:i A') }}</a> --</li>
                            <li>
                                <a title="" href="#"><span>{{ $detailsarticles->view->views }} Views</span></a>
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
                        <h3 class="category-headding">LEAVE A COMMENT</h3>
                        <div class="headding-border"></div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-1" />
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content" data-content="Your Name">Your Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-2" />
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content" data-content="Your Email">Your Email</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-12">
                                    <span class="input">
                                        <textarea class="input_field" id="message"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content" data-content="Your Email">Your Message</span>
                                        </label>
                                    </span>
                                    <button type="button" class="btn btn-style">
                                        Post Your Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..." name="q" />
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
                        <a href="#"><img src="{{ asset('images/1684469000_ad-banner.jpg') }}"
                                class="img-responsive center-block" alt="" /></a>
                    </div>

                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                        </ul>
                        <hr />
                        <!-- tabs -->
                        @foreach ($mostViews as $artikelpopular)
                            <div class="tab_content">
                                <div class="tab-item-inner">
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb" style="width: 90px; height: 70px;">
                                            <a href="#" rel="bookmark">
                                                <img class="entry-thumb"
                                                    src="{{ asset('images/' . $artikelpopular->article->thumbnail) }}"
                                                    alt="" style="width: 100%; height: 100%; object-fit: cover;"
                                                    width="30" height="60" />
                                            </a>
                                        </div>


                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-4">
                                                <a href="#">{{ $artikelpopular->article->division->nama_divisi }}</a>
                                            </h6>
                                            <h3 class="td-module-title">
                                                <a href="{{ route('detailsberita', ['slug' => $artikelpopular->article->slug]) }}">{{ Str::limit($artikelpopular->article->judul, 30) }}</a>
                                            </h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i
                                                        class="pe-7s-clock"></i>{{ $artikelpopular->article->created_at->format('d F Y h:i A') }}
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment">
                                                    <i class="fas fa-eye"></i> {{ $artikelpopular->views }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                </aside>
            </div>
        </div>
    </div>
@endsection
