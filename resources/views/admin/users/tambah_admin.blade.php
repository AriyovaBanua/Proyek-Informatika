<!-- resources/views/admin/create.blade.php -->
@extends('admin.layouts.app')

@section('title', 'Tambah Admin')
@section('users-sidebar', 'active')
@section('content')

<div class="col-lg-6 mb-4">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Admin</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Tambah Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
