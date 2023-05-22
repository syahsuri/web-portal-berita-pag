@extends('homepage.layouts.main')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <ul class="breadcrumb" style="margin-top: 20px;">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="active">List Berita</li>
                    </ul>
                </div>
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
                                                <a
                                                    href="{{ route('detailsberita', ['slug' => $artikelpopular->article->slug]) }}">{{ Str::limit($artikelpopular->article->judul, 30) }}</a>
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
