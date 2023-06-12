@extends('dashboard.layouts.main')
@section('contents')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="row">

                    <div class="col">
                        @if (session()->has('success'))
                            <div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2"
                                role="alert">
                                <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{{ session('success') }}</strong> <a href="#" class="alert-link"></a>
                            </div>
                        @endif

                        @if (session()->has('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('failed') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            <div class="content-body">
                {{-- Heading --}}
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                        <h3 class="content-header-title mb-0 d-inline-block">Insert Photo</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Insert Photo
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Heading --}}
                <!-- Datatables -->
                <div class="row">
                    <div class="col">
                        <!-- Button to trigger the modal -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fa-regular fa-plus me-2"></i>
                            Tambah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('insertphoto.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Photo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Photo</label>
                                                <input type="file" class="form-control" id="image" name="image"
                                                    onchange="previewImage(event)">
                                            </div>
                                            <div id="imagePreviewContainer" class="mb-3">
                                                <img id="imagePreview" src="#" alt="Photo Preview"
                                                    style="max-width: 200px; max-height: 200px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventRegInput3">Divisi</label>
                                                <select class="c-select form-control" id="album_id" name="album_id">
                                                    @foreach ($albums as $album)
                                                        <option value="{{ $album->id }}"
                                                            {{ old('id') == $album->id ? 'selected' : '' }}>
                                                            {{ $loop->iteration }} - {{ $album->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                        <div class="card mt-3">
                            <div class="card-body">
                                {{-- Table --}}
                                <table id="myTable"
                                    class="table responsive nowrap table-bordered table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Photo</th>
                                            <th>Album</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($photos as $photo)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> <a href="{{ asset('photos/' . $photo->image) }}" target="_blank"
                                                        title="{{ $photo->image }}">
                                                        {{ \Illuminate\Support\Str::limit($photo->image, 10) }}
                                                    </a></td>
                                                <td>{{ $photo->album->title }}</td>
                                                <td>{{ Str::limit($photo->deskripsi, 50, '...') }}</td>

                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal"
                                                            data-bs-target="#modalEdit{{ $loop->iteration }}">
                                                            <i class="fa-regular fa-pen-to-square"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modalHapus{{ $loop->iteration }}">
                                                            <i class="fa-regular fa-trash-can fa-lg"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                        {{-- Modal Hapus  --}}
                                        <div class="modal fade" id="modalHapus{{ $loop->iteration }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Berita
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form
                                                        action="{{ route('insertphoto.destroy', ['id' => $photo->id]) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $photo->id }}">
                                                        <div class="modal-body">
                                                            <p class="fs-6">Apakah anda yakin akan menghapus
                                                                <b>{{ $photo->deskripsi }}</b>
                                                                <b></b>?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-outline-danger">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /Modal Hapus  --}}

                                        {{-- Modal edit  --}}
                                        <div class="modal fade" id="modalEdit{{ $loop->iteration }}" tabindex="-1"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form
                                                        action="{{ route('editaphoto.update', ['id' => $photo->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Photo</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <label for="image" class="form-label">Photo</label>
                                                                <input type="file" class="form-control" id="image"
                                                                    name="image" onchange="previewImage(event)">
                                                            </div>
                                                            <div id="imagePreviewContainer" class="mb-3">
                                                                <img id="imagePreview"
                                                                    src="{{ asset('photos/' . $photo->image) }}"
                                                                    alt="Current Photo"
                                                                    style="max-width: 200px; max-height: 200px;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="eventRegInput3">Divisi</label>
                                                                <select class="c-select form-control" id="album_id"
                                                                    name="album_id">
                                                                    @foreach ($albums as $album)
                                                                        <option value="{{ $album->id }}"
                                                                            {{ old('id') == $album->id ? 'selected' : '' }}>
                                                                            {{ $loop->iteration }} -
                                                                            {{ $album->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="deskripsi"
                                                                    class="form-label">Deskripsi</label>
                                                                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $photo->deskripsi }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /Modal edit  --}}
                                    @endforeach
                                </table>
                                {{-- End Table --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Datatables -->
            </div>
        </div>
    </div>

@section('script')
    <script>
        function previewImage(event) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.setAttribute('src', '#');
            }
        }
    </script>
@endsection
@endsection
