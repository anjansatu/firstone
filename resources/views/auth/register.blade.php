@extends('layouts.front')
@section('title', 'User Register')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="form-container">
        <h2 class="mb-4 text-center">User Register</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}">Already registered?</a>
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection

