@extends('admin.layouts.app')

@section('title', 'Update Success')

@section('content')

<div class="container">
    <div class="alert alert-success">
        <h4>Success!</h4>
        <p>{{ session('success') }}</p>
    </div>
    <a href="{{ route('admin.users') }}" class="btn btn-primary mb-3">Kembali</a>
</div>

@endsection
