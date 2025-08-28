@extends('layouts.front')

@section('title', 'Welcome')

@section('content')
<header class="header-area">
    <div class="container">
        <div class="header-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
<section class="hero-section text-center py-5">
    <div class="container">
        <h1>Welcome</h1>
        <p class="lead">This page uses template assets.</p>
    </div>
</section>
@endsection
