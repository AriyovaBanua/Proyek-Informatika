@extends('admin.layouts.app')

@section('title', 'Tambah Produk')
@section('produk-sidebar', 'active')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Produk</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Form input fields -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>

                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>

                            <div class="mb-3">
                                <p class="text-danger">Isi harga sesuai kebutuhan, biarkan 0 bila tidak mengisi</p>
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga (S)</label>
                                <input type="number" class="form-control" id="harga_small" name="harga_small" value="0">
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga (M)</label>
                                <input type="number" class="form-control" id="harga_medium" name="harga_medium" value="0">
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga (L)</label>
                                <input type="number" class="form-control" id="harga_large" name="harga_large" value="0">
                            </div>

                            <div class="mb-3">
                                <label for="warna" class="form-label">Warna</label>
                                <input type="text" class="form-control" id="warna" name="warna">
                            </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
