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
                        <h3 class="content-header-title mb-0 d-inline-block"></h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href=""></a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Berita
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
                        <form class="form" action="" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="id_jenis_product">Jenis Product</label>
                                    <select class="c-select form-control" id="id_jenis_product" name="id_jenis_product">
                                    </select>
                                </div>

                                <div class="form-group">

                                    <label for="eventRegInput2">Kode Barang</label>
                                    <input type="text" id="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang"
                                        id="kode_barang" value="">
                                    @error('kode_barang')
                                        <div class="invalid-feedback">
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="eventRegInput3">Nama Product</label>
                                    <input type="text" id="nama_product"
                                        class="form-control @error('nama_product') is-invalid @enderror" name="nama_product"
                                        id="nama_product" value="" required>
                                    @error('nama_product')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="eventRegInput5">Brand</label>
                                    <input type="text" id="brand"
                                        class="form-control @error('brand') is-invalid @enderror" name="brand"
                                        id="brand" value="" required>
                                    @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="eventRegInput5">Stok</label>
                                    <input type="text" id="stok"
                                        class="form-control @error('stok') is-invalid @enderror" name="stok"
                                        id="stok" value="" required>
                                    @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <div class="input-group mt-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp .</span>
                                        </div>
                                        <input type="text" id="harga_satuan"
                                            class="form-control @error('harga_satuan') is-invalid @enderror"
                                            name="harga_satuan" id="" value="" required>
                                        @error('harga_satuan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
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

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
