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
                        <h3 class="content-header-title mb-0 d-inline-block">Insert Berita</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Insert Berita
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
                        <a class="btn btn-primary" href="{{ route('createberita') }}">
                            <i class="fa-regular fa-plus me-2"></i>
                            Tambah
                        </a>
                        <div class="card mt-3">
                            <div class="card-body">
                                {{-- Table --}}
                                <table id="myTable"
                                    class="table responsive nowrap table-bordered table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Divisi</th>
                                            <th>Author</th>
                                            <th>thumbnail</th>
                                            <th>Tanggal Berita</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $artikel)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ \Illuminate\Support\Str::limit($artikel->judul, 30) }}</td>
                                                <td>{{ $artikel->division->nama_divisi }}</td>
                                                <td>{{ $artikel->author }}</td>
                                                <td>
                                                    <a href="{{ asset('images/' . $artikel->thumbnail) }}" target="_blank"
                                                        title="{{ $artikel->thumbnail }}">
                                                        {{ \Illuminate\Support\Str::limit($artikel->thumbnail, 10) }}
                                                    </a>
                                                </td>
                                                <td>{{ $artikel->created_at->format('d F Y h:i A') }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="{{ route('editberita', ['id' => $artikel->id]) }}"
                                                            class="btn btn-sm btn-warning me-2">
                                                            <i class="fa-regular fa-pen-to-square"></i>
                                                        </a>

                                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modalHapus{{ $loop->iteration }}">
                                                            <i class="fa-regular fa-trash-can fa-lg"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>


                                    {{-- Modal Hapus User --}}
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
                                                <form action="{{ route('insertberita.destroy',  ['id' => $artikel->id]) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $artikel->id }}">
                                                    <div class="modal-body">
                                                        <p class="fs-6">Apakah anda yakin akan menghapus
                                                            <b>{{ $artikel->judul }}</b>
                                                            <b></b>?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Modal Hapus Prodi --}}
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
@endsection
