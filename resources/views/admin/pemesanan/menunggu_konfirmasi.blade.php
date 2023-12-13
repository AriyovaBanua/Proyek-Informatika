@extends('admin.layouts.app')

@section('title', 'Pemesanan')
@section('pemesanan-sidebar', 'active')
@section('konfirmasi-navbar', 'active')
@section('content')

<link href="{{asset("admin/vendor/datatables/dataTables.bootstrap4.min.css")  }}" rel="stylesheet">
 <!-- Page level plugins -->
<script src="{{ asset("admin/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("admin/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("js/demo/datatables-demo.js") }}"></script>
<div class="container">
    <div class="container mt-5">
        <h2>Daftar Pemesanan</h2>
        
         @include('admin.pemesanan.navbar')
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
                        @foreach ($transaksis as $transaction)
                        <tr>
                            <td>{{ $transaction->order_id }}</td>
                            <td>{{ $transaction->email }}</td>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->status_pesanan }}</td>
                            <td>{{ $transaction->total }}</td>
                            <td>
                                <!-- Tombol-tombol aksi di sini -->
                                <a href="{{ route('pemesanan.konfirmasi', $transaction->order_id) }}" class="btn btn-primary">Konfirmasi</a>
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
