@extends('layouts.front')

@section('title', 'Welcome')
@section('body-class', 'animated-bg')

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
        <a href="#" class="btn btn-primary mt-3">Get Started</a>
    </div>
</section>

<section class="features-section py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm bg-white rounded">
                    <h3>Fast</h3>
                    <p>Experience blazing fast performance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm bg-white rounded">
                    <h3>Secure</h3>
                    <p>Your data is protected with industry-leading security.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm bg-white rounded">
                    <h3>Reliable</h3>
                    <p>Always available when you need it.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
