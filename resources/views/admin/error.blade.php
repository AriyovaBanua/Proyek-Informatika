@extends('admin.layouts.app')

@section('title', 'Error')

@section('content')

<div class="container">
    <div class="alert alert-danger">
        <h4>Error!</h4>
        <p>{{ session('error') }}</p>
    </div>
    <a href="{{ route('admin.users') }}" class="btn btn-primary mb-3">Kembali</a>
</div>

@endsection
