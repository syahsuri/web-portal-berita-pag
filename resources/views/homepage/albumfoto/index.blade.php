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
                        <li class="active">Galeri / Album Foto</li>
                    </ul>
                </div>
                {{-- gambar 1 --}}
                <div class="card">
                    @foreach ($albums as $album)
                    <div class="col-sm-4">
                        <div class="post-style1">
                            <div class="grid-container">
                                <div class="card-grid">
                                    <img src="{{ asset('images/yellowFolder.png')}}" alt="Alps" style="width: 250px">
                                    <div class="card-content">
                                        <a href="{{ route('photopage', ['id' => $album->id]) }}">{{ $album->title }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
