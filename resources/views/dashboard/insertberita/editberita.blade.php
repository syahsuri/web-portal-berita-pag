@extends('dashboard.layouts.main')
@section('contents')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="col">
                    @if (session()->has('success'))
                        <div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ session('success') }}</strong> <a href="#" class="alert-link"></a>
                        </div>
                    @endif

                    @if (session()->has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('failed') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                {{-- Heading --}}
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                        <h3 class="content-header-title mb-0 d-inline-block">Edit Berita</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Berita
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Heading --}}
                <!-- Form -->
                <div class="card-content collapse show">
                    <div class="card-body">

                        <form class="form" action="{{ route('editberita.update', ['id' => $articles->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="judul_berita">Judul Berita</label>
                                    <input type="text" id="judul"
                                        class="form-control @error('judul') is-invalid @enderror" name="judul"
                                        id="judul" value="{{ $articles->judul }}">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="judul_berita">slug</label>
                                    <input type="text" id="slug"
                                        class="form-control @error('judul') is-invalid @enderror" name="slug"
                                        id="judul" value="{{ $articles->slug }}">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="eventRegInput3">Divisi</label>
                                    <select class="c-select form-control" id="id_divisi" name="id_divisi">
                                        @foreach ($divisions as $divisi)
                                            <option value="{{ $divisi->id }}"
                                                {{ old('id_divisi', $articles->id_divisi) == $divisi->id ? 'selected' : '' }}>
                                                {{ $divisi->nama_divisi }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="eventRegInput2">Author</label>
                                    <input type="text" id="author"
                                        class="form-control @error('author') is-invalid @enderror" name="author"
                                        id="author" value="{{ $articles->author }}">
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                                    @if ($articles->thumbnail)
                                        <p>Previous thumbnail:</p>
                                        <img src="{{ asset('images/' . $articles->thumbnail) }}" alt="thumbnail"
                                            style="max-width: 200px; max-height: 200px;">
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="eventRegInput3">Article</label>
                                    <textarea id="summernote" name="article" value="">{{ $articles->article }}</textarea>
                                </div>
                            </div>
                            <div class="form-actions center">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ Form -->
            </div>
        </div>
    </div>

@section('script')
    <script>

        //Automatic Slug Typewritter
        const judulInput = document.getElementById('judul');
        const slugInput = document.getElementById('slug');

        judulInput.addEventListener('input', function() {
            const judul = judulInput.value;
            const slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');

            slugInput.value = slug;
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write Articles Here',
                tabsize: 2,
                height: 350
            });
        });
    </script>
@endsection
@endsection
