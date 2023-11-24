<!-- resources/views/users.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Users')
@section('content')

<!-- Tambahkan tombol untuk menambah admin -->
<a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Admin</a>

<!-- Tabel untuk menampilkan daftar admin -->
<table class="table">
    <thead>
        <tr>
            <th>Username</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{ $admin->username }}</td>
            <td>
                <!-- Tombol edit -->
                <a href="{{ route('admin.edit', $admin->username) }}" class="btn btn-primary">Edit</a>
                
                <!-- Form untuk menghapus -->
                <form action="{{ route('admin.destroy', $admin->username) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection