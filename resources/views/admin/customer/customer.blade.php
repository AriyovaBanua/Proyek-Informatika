<!-- resources/views/admin/customers/index.blade.php -->
@extends('admin.layouts.app')

@section('title', 'Daftar Customer')
@section('customer-sidebar', 'active')
@section('content')
    <div class="container-fluid">
        <h1>Daftar Customer</h1>
        <div class="table-responsive">
        <p>{{ session('error') }} </p>
        <p>{{ session('success') }} </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama Customer</th>
                        <th>No. HP</th>
                        <th>Aksi</th> <!-- Tambah kolom Aksi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->nama_customer }}</td>
                            <td>{{ $customer->no_hp }}</td>
                            <td>
                                <form action="{{ route('customer.delete', $customer->email) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data customer ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
