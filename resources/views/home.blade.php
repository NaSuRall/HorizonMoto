@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


@section('content')
    <div class="container">
        <header>
            <div class="logo">
                <img src="{{ asset('logo.png') }}" alt="">
            </div>
            <video autoplay muted loop id="bgVideo">
                <source src="{{ asset('videos/videos.mov') }}" type="video/mp4">
                Ton navigateur ne supporte pas la vidéo.
            </video>
            <div class="nav-left">
                <a href=""><img src="{{ asset('maxxess.png') }}" alt=""></a>
                <a href=""><img src="{{ asset('Honda.png') }}" alt=""></a>
                <a href=""><img src="{{ asset('suzuki.svg') }}" alt=""></a>
                <a href="" style="background-color: black"><img src="{{ asset('kawazaki.webp') }}" alt=""></a>
                <a href="" style="background-color: #FE6702"><img src="{{ asset('KTM-Logo.png') }}" alt=""></a>
                <a href="" style="background-color: #FE6702"><img src="{{ asset('KTM-Logo.png') }}" alt=""></a>
            </div>
        </header>
    </div>
    @include('components.navbar')
@endsection
