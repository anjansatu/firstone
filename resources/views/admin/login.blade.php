@extends('layouts.front')
@section('title', __('Admin Login'))

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="form-container">
        <h2 class="mb-4 text-center">{{ __('Admin Login') }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control" type="email" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">{{ __('Log in') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

