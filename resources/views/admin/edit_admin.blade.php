@extends('admin.layouts.app')

@section('title', 'Edit Admin')

@section('content')

<div class="container">
    <h1>Edit Admin</h1>

    <form method="POST" action="{{ route('admin.update', $admin->username) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}" readonly>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
