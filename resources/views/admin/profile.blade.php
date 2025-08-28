@extends('layouts.admin')
@section('title', __('Admin Profile'))
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl mb-4 font-semibold">{{ __('Profile') }}</h2>
    <p class="mb-2"><strong>{{ __('Email') }}:</strong> {{ $admin['email'] }}</p>
    <form method="POST" action="{{ route('admin.logout') }}" class="mt-4">
        @csrf
        <button class="w-full bg-indigo-600 text-white py-2 rounded">{{ __('Log out') }}</button>
    </form>
</div>
@endsection
