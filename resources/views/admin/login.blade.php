@extends('layouts.admin')
@section('title', __('Admin Login'))
@section('content')
<nav class="bg-white shadow p-4 flex justify-between items-center">
    <div class="text-2xl font-bold text-indigo-600">tk</div>
</nav>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl mb-4 font-semibold">{{ __('Login') }}</h2>
    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('admin.login') }}" class="space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded" required>
        <input type="password" name="password" placeholder="Password" class="w-full border px-3 py-2 rounded" required>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded">{{ __('Log in') }}</button>
    </form>
</div>
@endsection
