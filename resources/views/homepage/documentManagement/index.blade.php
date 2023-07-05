@extends('homepage.layouts.main')

@section('contents')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Document Management</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('homepage') }}" title="">Home</a></li>
                            <li><a href="#" title="">Document Management</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            {{-- Content Page  --}}
            <div class="col-sm-8">

            </div>
            {{-- Content Page --}}
            <aside class="col-sm-4 left-padding">

                <div class="tab-inner">

                    <div class="banner-add mb-25">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <div class="slideshow-container">
                            @foreach ($broadcasts as $key => $broadcast)
                                <div class="mySlides">
                                    <div class="numbertext">{{ $key + 1 }} / {{ count($broadcasts) }}</div>
                                    <img src="{{ asset('broadcast/' . basename($broadcast->image)) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <script>
                            let slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");

                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }

                                slideIndex++;

                                if (slideIndex > slides.length) {
                                    slideIndex = 1;
                                }

                                slides[slideIndex - 1].style.display = "block";
                                setTimeout(showSlides, 5000); // Change image every 10 seconds
                            }
                        </script>
                    </div>
                    <ul class="tabs mt-25">
                        <li><a href="#">POPULAR</a></li>
                    </ul>
                    <hr>
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
@endsection
