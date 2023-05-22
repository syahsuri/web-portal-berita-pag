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
                    <ul class="breadcrumb" style="margin-top: 20px;">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="active">Galeri / Foto</li>
                    </ul>
                </div>
                {{-- gambar 1 --}}

                @foreach ($images as $image)
                    <div class="card">
                        <div class="col-sm-4">
                            {{-- image ni --}}
                            <div class="post-style1">
                                <!-- post image -->
                                <a href="{{ asset('images/' . $image->thumbnail) }}" target="_blank"
                                    title="{{ $image->thumbnail }}" class="video-img-icon">
                                    <img src="{{ asset('images/' . $image->thumbnail) }}" alt=""
                                        class="img-responsive">
                                </a>
                                <!-- post title -->
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <h3><a
                                                href="#">{{ substr($image->judul, 0, 40) }}{{ strlen($image->judul) > 50 ? '...' : '' }}</a>
                                        </h3>
                                        <a title=""
                                            href="#">{{ date('d F Y', strtotime($image->created_at)) }}</a> --</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
