@extends('admin.layouts.app')

@section('title', 'Products')
@section('produk-sidebar', 'active')
@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    <p>{{ session('error') }} </p>
    <p>{{ session('success') }} </p>
    <div class="row">
        @foreach($produks as $produk)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('gambar_produk/' . $produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                    <p class="card-text">Code: {{ $produk->code }}</p>
                    <p class="card-text">Stock: {{ $produk->stock }}</p>
                    <p class="card-text">Category: {{ $produk->category }}</p>
                    <p class="card-text">Harga: Rp {{ $produk->harga }}</p>
                    <p class="card-text">Ukuran: {{ $produk->ukuran }}</p>
                    <p class="card-text">Warna: {{ $produk->warna }}</p>
                    <a href="{{ route('produk.edit', $produk->code) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->code) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
