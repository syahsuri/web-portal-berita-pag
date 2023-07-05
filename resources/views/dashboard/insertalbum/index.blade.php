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
                        <h3 class="content-header-title mb-0 d-inline-block">Add Album</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Album
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
                                    <form action="{{ route('insertalbum.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Live Broadcast</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Nama Album</label>
                                                <input type="text" class="form-control" id="title" name="title">
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
                                            <th>Nama Album</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($albums as $album)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $album->title }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal"
                                                        data-bs-target="#modalEdit{{$loop->iteration}}">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus{{$loop->iteration}}">
                                                        <i class="fa-regular fa-trash-can fa-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                    {{-- Modal Hapus  --}}
                                    <div class="modal fade" id="modalHapus{{$loop->iteration}}" tabindex="-1"
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
                                                    action="{{ route('insertalbum.destroy', ['id' => $album->id]) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <p class="fs-6">Apakah anda yakin akan menghapus
                                                            <b>{{ $album->title }}</b>
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
                                    <div class="modal fade" id="modalEdit{{$loop->iteration}}" tabindex="-1" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form
                                                    action="{{ route('editalbum.update', ['id' => $album->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Album</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Nama Album</label>
                                                            <input type="text" class="form-control" value="{{ old('albums',$album->title) }}" id="title" name="title">
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
                                    @endforeach
                                    {{-- /Modal edit  --}}
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
@endsection
