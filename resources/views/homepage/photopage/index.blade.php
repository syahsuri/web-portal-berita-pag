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
                        <li class="active">Galeri / Album Foto / Foto</li>
                    </ul>
                </div>
                {{-- gambar 1 --}}
                <div class="card">
                    @foreach ($photos as $photo)
                    <div class="col-sm-4">
                        <div class="post-style1">
                            <div class="grid-container">
                                <div class="card-grid">
                                  <a href="{{ asset('photos/' . $photo->image) }}" target="_blank"><img src="{{ asset('photos/' . $photo->image) }}" alt="Alps" style="width: 250px"></a>
                                  <div class="card-content">
                                    <h5>{{ $photo->deskripsi }}</h5>
                                  </div>
                                  <div>
                                    <center><a title="" href="#">{{ date('d F Y', strtotime($photo->created_at)) }}</a></center>
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
