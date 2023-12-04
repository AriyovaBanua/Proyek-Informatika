@extends('admin.layouts.app')

@section('title', 'Pemesanan')
@section('pemesanan-sidebar', 'active')
@section('content')

<link href="{{asset("admin/vendor/datatables/dataTables.bootstrap4.min.css")  }}" rel="stylesheet">
 <!-- Page level plugins -->
<script src="{{ asset("admin/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("admin/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("js/demo/datatables-demo.js") }}"></script>
<div class="container">
    <div class="container mt-5">
        <h2>Daftar Transaksi</h2>

        <div class="mb-3">
            <a href="{{ url('/pemesanan') }}" class="btn btn-primary">Semua Transaksi</a>
            <a href="{{ url('/pemesanan/Menunggu Konfirmasi') }}" class="btn btn-secondary">Menunggu Konfirmasi</a>
            <a href="{{ url('/pemesanan/Proses') }}" class="btn btn-info">Proses</a>
            <a href="{{ url('/pemesanan/Dikirim') }}" class="btn btn-warning">Dikirim</a>
            <a href="{{ url('/pemesanan/Selesai') }}" class="btn btn-success">Selesai</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Status Pesanan</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->order_id }}</td>
                            <td>{{ $transaction->email }}</td>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->status_pesanan }}</td>
                            <td>{{ $transaction->total }}</td>
                            <td>
                                <!-- Tombol-tombol aksi di sini -->
                                <a href="{{ route('pemesanan.konfirmasi', $transaction->order_id) }}" class="btn btn-primary">Konsfirmasi</a>
                                <form action="{{ route('pemesanan.hapus', $transaction->order_id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        


    
</div>
@endsection
