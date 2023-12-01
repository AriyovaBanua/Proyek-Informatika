<!-- resources/views/users.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Users')
@section('users-sidebar', 'active')
@section('content')

<!-- Tambahkan tombol untuk menambah admin -->


<!-- Tabel untuk menampilkan daftar admin -->
<div class="container">
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Admin</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- ... -->
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
                            <button type="submit" class="btn btn-danger" onclick="return deleteConfirmation('{{ $admin->username }}')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <script>
                function deleteConfirmation(username) {
                    if (confirm('Apakah Anda yakin ingin menghapus admin ' + username + '?')) {
                        return true;
                    }
                    return false;
                }
            </script>
            <!-- ... -->

    </table>
</div>


@endsection